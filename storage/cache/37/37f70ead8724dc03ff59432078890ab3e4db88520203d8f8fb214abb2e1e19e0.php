<?php

/* common/developer.twig */
class __TwigTemplate_43816568615fdb4f96bc370418ec4be91fa3a763d3d4ae39387f920dbd9987bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td>";
        // line 11
        echo (isset($context["column_component"]) ? $context["column_component"] : null);
        echo "</td>
            <td style=\"width: 150px;\">";
        // line 12
        echo (isset($context["entry_cache"]) ? $context["entry_cache"] : null);
        echo "</td>
            <td class=\"text-right\" style=\"width: 1px;\">";
        // line 13
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
          </tr>
        </thead>
        <tr>
          <td>";
        // line 17
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</td>
          <td ><div class=\"btn-group\" data-toggle=\"buttons\">";
        // line 18
        if ((isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 19
            echo "              <label class=\"btn btn-success active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 20
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 21
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        } else {
            // line 24
            echo "              <label class=\"btn btn-success\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 25
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 26
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        }
        // line 29
        echo "              
              ";
        // line 30
        if ( !(isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 31
            echo "              <label class=\"btn btn-danger active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 32
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 33
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        } else {
            // line 36
            echo "              <label class=\"btn btn-danger\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 37
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 38
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        }
        // line 40
        echo "</div></td>
          <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
        <tr>
          <td>";
        // line 44
        echo (isset($context["entry_sass"]) ? $context["entry_sass"] : null);
        echo "</td>
          <td><div class=\"btn-group\" data-toggle=\"buttons\">";
        // line 45
        if ((isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 46
            echo "              <label class=\"btn btn-success active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked>
                ";
            // line 48
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "</label>
              ";
        } else {
            // line 50
            echo "              <label class=\"btn btn-success\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">
                ";
            // line 52
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "</label>
              ";
        }
        // line 54
        echo "              ";
        if ( !(isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 55
            echo "              <label class=\"btn btn-danger active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>
                ";
            // line 57
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "</label>
              ";
        } else {
            // line 59
            echo "              <label class=\"btn btn-danger\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">
                ";
            // line 61
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "</label>
              ";
        }
        // line 62
        echo "</div></td>
          <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 63
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/edit&user_token=";
        // line 72
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',\t\t
\t\ttype: 'post',
        data: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t

\$('#modal-developer table button').on('click', function() {
\tvar element = this;
\t
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 103
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 103,  205 => 72,  193 => 63,  190 => 62,  185 => 61,  181 => 59,  176 => 57,  172 => 55,  169 => 54,  164 => 52,  160 => 50,  155 => 48,  151 => 46,  149 => 45,  145 => 44,  139 => 41,  136 => 40,  130 => 38,  124 => 37,  117 => 36,  111 => 33,  105 => 32,  98 => 31,  96 => 30,  93 => 29,  87 => 26,  81 => 25,  74 => 24,  68 => 21,  62 => 20,  55 => 19,  53 => 18,  49 => 17,  42 => 13,  38 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title"><i class="fa fa-cog"></i> {{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td>{{ column_component }}</td>*/
/*             <td style="width: 150px;">{{ entry_cache }}</td>*/
/*             <td class="text-right" style="width: 1px;">{{ column_action }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tr>*/
/*           <td>{{ entry_theme }}</td>*/
/*           <td ><div class="btn-group" data-toggle="buttons">{% if developer_theme %}*/
/*               <label class="btn btn-success active" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="1" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*               {{ button_on }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-success" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="1" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*               {{ button_on }}*/
/*               </label>*/
/*               {% endif %}*/
/*               */
/*               {% if not developer_theme %}*/
/*               <label class="btn btn-danger active" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="0" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*               {{ button_off }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-danger" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="0" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*               {{ button_off }}*/
/*               </label>*/
/*               {% endif %}</div></td>*/
/*           <td class="text-right"><button type="button" value="theme" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>{{ entry_sass }}</td>*/
/*           <td><div class="btn-group" data-toggle="buttons">{% if developer_sass %}*/
/*               <label class="btn btn-success active">*/
/*                 <input type="radio" name="developer_sass" value="1" autocomplete="off" checked>*/
/*                 {{ button_on }}</label>*/
/*               {% else %}*/
/*               <label class="btn btn-success">*/
/*                 <input type="radio" name="developer_sass" value="1" autocomplete="off">*/
/*                 {{ button_on }}</label>*/
/*               {% endif %}*/
/*               {% if not developer_sass %}*/
/*               <label class="btn btn-danger active">*/
/*                 <input type="radio" name="developer_sass" value="0" autocomplete="off" checked>*/
/*                 {{ button_off }}</label>*/
/*               {% else %}*/
/*               <label class="btn btn-danger">*/
/*                 <input type="radio" name="developer_sass" value="0" autocomplete="off">*/
/*                 {{ button_off }}</label>*/
/*               {% endif %}</div></td>*/
/*           <td class="text-right"><button type="button" value="sass" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*         </tr>*/
/*       </table>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'developer_theme\'], input[name=\'developer_sass\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer/edit&user_token={{ user_token }}',		*/
/* 		type: 'post',*/
/*         data: $('input[name=\'developer_theme\']:checked, input[name=\'developer_sass\']:checked'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/*             $('.alert-dismissible').remove();*/
/* */
/*             if (json['error']) {*/
/*                 $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}			*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});	*/
/* });	*/
/* */
/* $('#modal-developer table button').on('click', function() {*/
/* 	var element = this;*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer/' + $(element).attr('value') + '&user_token={{ user_token }}',		*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/*             $('.alert-dismissible').remove();*/
/* */
/*             if (json['error']) {*/
/*                 $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}			*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
