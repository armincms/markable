<?php 

namespace Armincms\Markable;

use Zareismail\Markable\HasPending;  

trait Suspendable 
{
	use Publishable, HasPending;
}