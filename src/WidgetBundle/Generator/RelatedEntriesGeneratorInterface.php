<?php

namespace WidgetBundle\Generator;

use WidgetBundle\Model\EntryInterface;

interface RelatedEntriesGeneratorInterface
{
    public function generateRelatedEntries(EntryInterface $news, array $params = []);
}