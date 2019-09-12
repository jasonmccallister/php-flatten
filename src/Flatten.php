<?php

namespace McCallister;

class Flatten
{
    /**
     * The Flatten class will take an array of values and flatten them recursively
     *
     * @param $args array
     * @return array
     */
    public function __invoke(array $args): array
    {
        $flattened = [];

        foreach ($args as $value) {
            if (is_array($value)) {
                $flattened = array_merge($flattened, self::__invoke($value));
            } else {
                $flattened[] = $value;
            }
        }

        return $flattened;
    }
}
