<?php

namespace WidgetBundle\Generator;

use WidgetBundle\Model\EntryInterface;

interface LinkGeneratorInterface
{
    /**
     * @param EntryInterface $entry
     * @param array          $additionalUrlParams
     *
     * @return string
     */
    public function generateDetailLink(EntryInterface $entry, $additionalUrlParams = []);

    /**
     * @param EntryInterface $entry
     *
     * @return string
     */
    public function generateBackLink(EntryInterface $entry);
}