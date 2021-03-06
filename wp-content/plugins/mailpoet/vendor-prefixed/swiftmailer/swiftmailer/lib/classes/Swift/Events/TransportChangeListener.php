<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Events_TransportChangeListener extends Swift_Events_EventListener
{
 public function beforeTransportStarted(Swift_Events_TransportChangeEvent $evt);
 public function transportStarted(Swift_Events_TransportChangeEvent $evt);
 public function beforeTransportStopped(Swift_Events_TransportChangeEvent $evt);
 public function transportStopped(Swift_Events_TransportChangeEvent $evt);
}
