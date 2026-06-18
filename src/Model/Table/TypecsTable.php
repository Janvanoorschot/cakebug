<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class TypecsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsToMany('Typeb', [
            'through' => 'TypebTypecLinks',
        ]);
    }
}
