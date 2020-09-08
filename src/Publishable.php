<?php 

namespace Armincms\Markable;

use Zareismail\Markable\{Markable, HasDraft};  

trait Publishable 
{
	use Markable, HasDraft, HasPublish;
}