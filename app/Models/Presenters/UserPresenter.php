<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Models\Presenters;

/**
 * Class UserPresenter
 * @package App\Models\Presenters
 */
class UserPresenter extends EntityPresenter
{

    /**
     * @return string
     */
    public function name()
    {
        return $this->entity->first_name . ' ' . $this->entity->last_name;
    }

}