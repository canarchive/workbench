<?php
        
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $crawler->filter('.wrap .merger_box')->each(function ($node) use (& $i, & $data) {
        });
        $name = $node->filter('h3')->text();
        foreach ($tags as $key => $attr) {
            $value = trim($attr->nodeValue);
            $data[$name][$subName][] = $value;
        }
                $attrs = $node->filter('h3 a');
                if (count($attrs) < 1) {
                    return ;
                }
                $tagInfos = $node->filter('.tags')->eq(0)->filter('em');
