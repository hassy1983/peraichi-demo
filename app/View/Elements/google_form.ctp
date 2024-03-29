

<script type="text/javascript">
    /**
     * @license
     *! H5F
     * https://github.com/ryanseddon/H5F/
     * Copyright (c) Ryan Seddon | Licensed MIT
     */

    (function(e,t){"function"==typeof define&&define.amd?define(t):e.H5F=t()})(this,function(){var e,t,a,i,n,r,s,l,u,o,c,d,v,f,p,m,h,g,b,y,w,C,N,A,E,$,k=document,x=k.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder"};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var l=0,u=e.length;u>l;l++)s(e[l]);else s(e)},s=function(a){var i,n=a.elements,r=n.length,s=!!a.attributes.novalidate;if(b(a,"invalid",u,!0),b(a,"blur",u,!0),b(a,"input",u,!0),b(a,"keyup",u,!0),b(a,"focus",u,!0),b(a,"change",u,!0),b(a,"click",o,!0),b(a,"submit",function(i){e=!0,t||s||a.checkValidity()||w(i)},!1),!v())for(a.checkValidity=function(){return c(a)};r--;)i=!!n[r].attributes.required,"fieldset"!==n[r].nodeName.toLowerCase()&&l(n[r])},l=function(e){var t=e,a=g(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,s=/^(input|keyup)$/i,l=r.test(n.type)?n.type:n.pattern?n.pattern:!1,u=f(t,l),o=m(t,"step"),v=m(t,"min"),h=m(t,"max"),b=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return c.call(this,t)},t.setCustomValidity=function(e){d.call(t,e)},t.validity={valueMissing:a,patternMismatch:u,rangeUnderflow:v,rangeOverflow:h,stepMismatch:o,customError:b,valid:!(a||u||o||v||h||b)},n.placeholder&&!s.test(i)&&p(t)},u=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,s=/^(checkbox|radio)$/i,o=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||l(t),t.validity.valid&&(""!==t.value||s.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&o&&(y(t.form,"keyup",u,!0),o=!1))},c=function(t){var a,i,n,r,s=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var l=0,o=a.length;o>l;l++)i=a[l],n=!!i.attributes.required,r=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&(n||r&&n)&&(u(i),i.validity.valid||s||
        //(e&&i.focus(),s=!0)
        );return!s}return u(t),t.validity.valid},d=function(e){var t=this;t.validationMessage=e},o=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(x,"validity")&&E(x,"checkValidity")},f=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},p=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,s=/^password$/i,l=!!("placeholder"in x);l||!r.test(e.nodeName)||s.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,b(e.form,"submit",function(){i="submit",p(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),s=(r-a)%n;return g(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==s:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},h=function(e){var t=!!e.attributes.required;return t?g(e):!1},g=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},b=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});

</script>



<div class="ss-form-container">
    <div class="ss-top-of-page">
        <div class="ss-form-heading">
            <h1 class="ss-form-title" dir="ltr"> </h1>
            <hr class="ss-email-break" style="display:none;">
            <!-- <div class="ss-required-asterisk">* 必須項目</div> -->
        </div>
    </div>
    <div class="ss-form">
        <form action="https://docs.google.com/forms/d/1SYBfS0i9Kib4SP91T1qV-2sqvv14d0h0gSVmBRQuvDA/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
            <ol style="padding-left: 0">

            <div class="ss-form-question errorbox-good">
                <div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1019546940">
                     <div class="ss-q-title">*お名前
                        <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                        <span class="ss-required-asterisk"> </span>
                     </div>
                     <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                        <input type="text" name="entry.1019546940" value="" class="ss-q-short" id="entry_1019546940" dir="auto" aria-required="true" required="" title="">
                        <div class="error-message"></div>
                        <!-- <div class="required-message">This is a required question</div> -->
                    </div>
                </div>
            </div>

            <div class="ss-form-question errorbox-good">
                <div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_127400455">
                    <div class="ss-q-title">*Eメールアドレス
                        <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                        <span class="ss-required-asterisk"> </span>
                    </div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                        <input type="text" name="entry.127400455" value="" class="ss-q-short" id="entry_127400455" dir="auto" aria-required="true" required="" title="">
                        <div class="error-message"></div>
                        <!-- <div class="required-message">This is a required question</div> -->
                    </div>
                </div>
            </div>

            <div class="ss-form-question errorbox-good">
                <div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry">
                     <label class="ss-q-item-label" for="entry_1293059246">
                        <div class="ss-q-title">どちらでperaichiをお知りになりましたか？</div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                     </label>
                     <input type="text" name="entry.1293059246" value="" class="ss-q-short" id="entry_1293059246" dir="auto" title="">
                     <div class="error-message"></div>
                     </div>
                </div>
            </div>

            <div class="ss-form-question errorbox-good">
                 <div dir="ltr" class="ss-item  ss-paragraph-text">
                     <div class="ss-form-entry">
                         <label class="ss-q-item-label" for="entry_2146410725">
                             <div class="ss-q-title">メッセージ</div>
                             <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                         </label>
                         <textarea name="entry.2146410725" rows="8" cols="0" class="ss-q-long" id="entry_2146410725" dir="auto"></textarea>
                         <div class="error-message"></div>
                     </div>
                 </div>
            </div>

            <input type="hidden" name="draftResponse" value="[]">
            <input type="hidden" name="pageHistory" value="0">

            <div class="ss-item ss-navigate">
                <table id="navigation-table">
                    <tbody>
                        <tr>
                            <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                            <input type="submit" name="submit" value="送信" id="ss-submit">
                            </td>
                       </tr>
                    </tbody>
                </table>
            </div>

            </ol>
        </form>
    </div>
    <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic style="display: none;"></div> <!--display:none追加-->
</div>
<script type='text/javascript' src='https://docs.google.com/static/forms/client/js/1249312147-formviewer_prd.js'></script> <!--URL変更-->
<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));_initFormViewer(
        "[100,\x22#ccc\x22,[]\n]\n");
</script>
