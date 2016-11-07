'use strict';
import $ from 'jquery';

export default function() {
  let form = $('.form_steps');
  let steps = form.find('.form_steps__step');
  let maxStep = steps.length;
  let stepWidth = (100 / maxStep);
  let viewportWidth = (maxStep * 100);
  let viewport = form.find('.form_steps__viewport');
  steps.css({'width':`${stepWidth}%`});
  viewport.css({'width':`${viewportWidth}%` });

  form.on('submit', function(evt) {
    evt.preventDefault();
    let s = 1;
    
    function step() {
      s = s + 1;
      console.log(s);
    }
    step();

     $(this).find('.form_steps__viewport').css({left: '-100%'});
    
  });
}
