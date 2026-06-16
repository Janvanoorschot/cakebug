<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class TypeATypeBLinksTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsTo('TypeA');
        $this->belongsTo('TypeB');
    }
}
