<?php

namespace Astrogoat\Fictionary\Sections\Blog;

use Astrogoat\Blog\Bricks\Article;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Toggle;
use Helix\Lego\Bricks\ValueObjects\LinkValueObject;
use Helix\Lego\Bricks\ValueObjects\TextValueObject;
use Helix\Lego\Http\Livewire\Section;
use stdClass;

class ThreeColumnWithImages extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.blog.three-column-with-images';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/blog/three-column-with-images.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')->bricks([
                'heading' => Text::name('Heading')->renderAsElement('h2'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'articles' => Repeater::name('Articles')->bricks([
                'useExistingBlogArticle' => Toggle::name('Use existing blog article'),
                'blogArticleId' => Article::name('Article')
                    ->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === true;
                    }),
                'title' => Text::name('Title')->renderAsElement(false)
                    ->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                    }),
                'description' => Text::name('Description')->renderAsElement('p')->multipleLines()
                    ->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                    }),
                'image' => Media::name('Image')->maxFiles(1)
                    ->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                    }),
                'link' => Link::name('Link')
                    ->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                    }),
                'showCta' => Toggle::name('Show CTA')->default(false),
            ]),
        ];
    }

    public function getArticle($bricks): stdClass
    {
        $article = new StdClass();

        if ($bricks->useExistingBlogArticle->isChecked() && $articleModel = $bricks->blogArticleId->getArticleModel()) {
            $article->link = new LinkValueObject([
                'href' => $articleModel->getPublishedRoute(),
                'id' => $articleModel->id,
                'target' => $articleModel->_self,
                'text' => 'Read article',
            ], $bricks->link->getBrickKey(), $this);
            $article->image = $articleModel->getFirstMedia('Featured');
            $article->title = $articleModel->title;
            $article->description = new TextValueObject($articleModel->description ?? '', [
                'asBulletPoints' => false,
                'newLineToHtmlBreak' => false,
            ], $this);
            $article->showCta = $bricks->showCta;

            return $article;
        }

        $article->link = $bricks->link;
        $article->image = $bricks->image;
        $article->title = $bricks->title;
        $article->description = $bricks->description;
        $article->showCta = $bricks->showCta;

        return $article;
    }
}
