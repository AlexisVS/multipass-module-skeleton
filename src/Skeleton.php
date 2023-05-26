<?php

namespace VendorName\Skeleton;

use App\Domain\Module\Modules\BaseModuleClass;

class Skeleton extends BaseModuleClass
{
    public string $name = ':package_slug';

    public string $description = ':package_description';

    public string $author = ':author_name';

    public string $version = '0.0.1';

    public string $namespace = 'VendorName'.'\\'.'Skeleton';

    public string $class_name = 'Skeleton';

    public string $vendor_path = ':vendor_slug'.'/'.':package_slug';

    //    Methods available:
    //      - installVueComponents() : Install Vue components
}
