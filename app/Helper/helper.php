<?php 

 function banner()
 {
     return App\Models\Banner::first();
 }

 function whoweare()
 {
     return App\Models\WhoWeAre::first();
 }

 function whowearebottom()
 {
     return App\Models\WhoWeAreBottom::latest()->get();
 }

 function whatwedo()
 {
     return App\Models\WhatWeDo::latest()->get();
 }

 function interesting()
 {
     return App\Models\Interesting::latest()->get();
 }

 function howdoesitwork()
 {
     return App\Models\HowDoesItWork::first();
 }

 function video()
 {
     return App\Models\Video::first();
 }

 function whatcanyoudo()
 {
     return App\Models\WhatCanYouDo::first();
 }

 function blogs()
 {
     return App\Models\Blog::latest()->get();
 }
 function partners()
 {
     return App\Models\Partner::latest()->get();
 }

 function footer()
 {
     return App\Models\GeneralSettings::first();
 }

 function faqs()
 {
     return App\Models\Faq::latest()->get();
 }
