<?php

namespace Astrogoat\Fictionary\Sections\Blog;

use stdClass;
use Helix\Lego\Bricks\Toggle;
use Astrogoat\Blog\Bricks\Article;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Helix\Lego\Bricks\ValueObjects\LinkValueObject;
use Helix\Lego\Bricks\ValueObjects\TextValueObject;

class ThreeColumnWithBackgroundImages extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.blog.three-column-with-background-images';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/blog/three-column-with-background-images.jpg';

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
                'author' => Group::name('Author')->bricks([
                    'name' => Text::name('Name')->renderAsElement(false)->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                        return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                    }),
                    'image' => Media::name('Image')->maxFiles(1),
                ]),
                'image' => Group::name('Image')->bricks([
                    'image' => Media::name('Image')->maxFiles(1),
                ])->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                    return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                }),
                'link' => Group::name('Link')->bricks([
                    'link' => Link::name('Title'),
                ])->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                    return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                }),
                'description' => Group::name('Description')->bricks([
                    'description' => Text::name('Description')->renderAsElement('span')->multipleLines(),
                ])->when(function ($brickName, $groupBrickName, $repeaterIndex) {
                    return $this->getBrickCurrentValue("articles.{$repeaterIndex}.useExistingBlogArticle") === false;
                }),
                'layout' => Group::name('Layout')->bricks([
                    'colSpan' => Select::name('Column span')->default('lg:fic-col-span-1')->help('Number of columns the article should span.')->options([
                        'lg:fic-col-span-1' => '1',
                        'lg:fic-col-span-2' => '2',
                        'lg:fic-col-span-3' => '3',
                    ]),
                ]),
            ]),
        ];
    }

    public function getArticle($bricks): stdClass
    {
        $article = new StdClass();

        if ($bricks->useExistingBlogArticle->isChecked() && $articleModel = $bricks->blogArticleId->getArticleModel()) {
            $link = new StdClass();
            $link->link = new LinkValueObject([
                'href' => $articleModel->getPublishedRoute(),
                'id' => $articleModel->id,
                'target' => $articleModel->_self,
                'text' => 'Read article',
            ], $bricks->link->getBrickKey(), $this);
            $article->link = $link;

            $image = new StdClass();
            $image->image = $articleModel->getFirstMedia('Featured');
            $article->image = $image;

            $author = new StdClass();
            $author->name = $articleModel->author;
            $author->image = $bricks->author->image;
            $article->author = $author;

            $description = new StdClass();
            $description->description = new TextValueObject($articleModel->description ?? '', [
                'asBulletPoints' => false,
                'newLineToHtmlBreak' => false,
            ], $this);
            $article->description = $description;

            $layout = new StdClass();
            $layout->colSpan = $bricks->layout->colSpan;
            $article->layout = $layout;

//            dd($article, $articleModel);

            return $article;
        }

        $article->author = $bricks->author;
        $article->link = $bricks->link;
        $article->image = $bricks->image;
        $article->description = $bricks->description;
        $article->layout = $bricks->layout;

        return $article;
    }
}
