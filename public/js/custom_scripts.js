/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. file editorn ABDUL RAUF
 */

  $(document).ready(function () {

        setTimeout(
        function() 
        {

        /*skill*/
        var skill_html = $('#skill_row').html();
        $("#skill_button").click(function(){
            $('#skill_add_more').append(skill_html);
        });
        
         /*training*/
        var tr_html = $('#training_row').html();
        $("#traning_button").click(function(){
            $('#training_add_more').append(tr_html);
        });

        /*certificate _add_more*/
        var c_html = $('#cer_row').html();
        $("#cer_button").click(function(){
            $('#cer_add_more').append(c_html);
        });
        
        /*Achievements  _add_more*/
        var ach_html = $('#ach_row').html();
        $("#ach_button").click(function(){
            $('#ach_add_more').append(ach_html);
        });

        /*hobby  _add_more*/
        var hobby_html = $('#hobby_row').html();
        $("#hobby_button").click(function(){
            $('#hobby_add_more').append(hobby_html);
        });
      
        /*vision  _add_more*/
        var vision_html = $('#vision_row').html();
        $("#vision_button").click(function(){
            $('#vision_add_more').append(vision_html);
        });
        
        /*languages  _add_more*/
        var languages_html = $('#languages_row').html();
        $("#languages_button").click(function(){
            $('#languages_add_more').append(languages_html);
        });
        /*research  _add_more*/
        var research_html = $('#research_row').html();
        $("#research_button").click(function(){
            $('#research_add_more').append(research_html);
        });
      
       /*academics  _add_more*/
        var research_html = $('#academics_row').html();
        $("#academics_button").click(function(){
            $('#academics_add_more').append(research_html);
        });
       /*experience_add_more  _add_more*/
        var experience_html = $('#experience_row').html();
        $("#experience_button").click(function(){
            $('#experience_add_more').append(experience_html);
        });
        
      
        $('input[name="phone"]').inputmask();
        $('input[name="email"]').inputmask();
        $('input[name="cnic"]').inputmask();
        $(function () {
        $('#chkToggle2').bootstrapToggle()
        });

          //alert('55');
         }, 2000);



$(function () {
$("#form-total").steps({
headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate: '<div class="title">#title#</div>',
        labels: {
        previous: 'Previous (پچھلا)',
                next: 'Next Step (اگلا مرحلہ)',
                finish: 'Submit',
                current: ''
        }
});
});
});
