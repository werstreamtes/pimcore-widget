<?php

namespace WidgetBundle\Twig\Extension;

use WidgetBundle\Generator\RelatedEntriesGeneratorInterface;
use WidgetBundle\Model\EntryInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class RelatedEntriesExtension extends AbstractExtension
{
    private RelatedEntriesGeneratorInterface $relatedEntriesGenerator;

    public function __construct(RelatedEntriesGeneratorInterface $relatedEntriesGenerator)
    {
        $this->relatedEntriesGenerator = $relatedEntriesGenerator;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('news_related_entries', [$this, 'generateRelatedEntries']),
        ];
    }

    public function generateRelatedEntries(EntryInterface $entry, array $params = []): array
    {
        return $this->relatedEntriesGenerator->generateRelatedEntries($entry, $params);
    }
}