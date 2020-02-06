<?php
/**
 * Created by NetBeansIDE.
 * User: Administrador
 */

namespace Flogar\Notify;

/**
 * Interface NotificatorInterface.
 */
interface NotificatorInterface
{
    /**
     * @param Notification $notification
     * @param array        $options
     *
     * @return mixed
     */
    public function notify(Notification $notification, $options = []);
}
