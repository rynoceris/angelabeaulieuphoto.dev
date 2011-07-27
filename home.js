// Copyright (c) 2009-2010 Ryan Ours. www.ryanours.com
// Home page image animations for angelabeaulieuphoto.com

$(document).ready(function(){
			$('img.large').hide();
			
			$('div.panel-one').hover(
				function(){
					$('img.panel-one-sm').hide();
					$('img.panel-one-lg').fadeIn(200);
				},
				function(){
					$('img.panel-one-lg').hide();
					$('img.panel-one-sm').show();
				}
			);
			
			$('div.panel-two').hover(
				function(){
					$('img.panel-two-sm').hide();
					$('img.panel-two-lg').fadeIn(200);
				},
				function(){
					$('img.panel-two-lg').hide();
					$('img.panel-two-sm').show();
				}
			);
			
			$('div.panel-three').hover(
				function(){
					$('img.panel-three-sm').hide();
					$('img.panel-three-lg').fadeIn(200);
				},
				function(){
					$('img.panel-three-lg').hide();
					$('img.panel-three-sm').show();
				}
			);
			
			$('div.panel-four').hover(
				function(){
					$('img.panel-four-sm').hide();
					$('img.panel-four-lg').fadeIn(200);
				},
				function(){
					$('img.panel-four-lg').hide();
					$('img.panel-four-sm').show();
				}
			);
			
			$('div.panel-five').hover(
				function(){
					$('img.panel-five-sm').hide();
					$('img.panel-five-lg').fadeIn(200);
				},
				function(){
					$('img.panel-five-lg').hide();
					$('img.panel-five-sm').show();
				}
			);
			
		});