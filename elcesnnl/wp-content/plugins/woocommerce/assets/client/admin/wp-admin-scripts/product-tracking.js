!function(){"use strict";var e={};(function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);var t=window.wc.tracks;const c=document.querySelectorAll(".row-actions span"),n=document.querySelector("#bulk-action-selector-top"),o=document.querySelector("#doaction"),r=document.querySelector("#bulk-edit .cancel"),a=document.querySelector("#bulk_edit"),l=document.querySelectorAll("#the-list .featured a"),s=document.querySelector("#post-query-submit"),u=document.querySelector("#product_cat"),i=document.querySelector("#dropdown_product_type"),d=document.querySelector("#search-submit"),_=document.querySelector("#post-search-input"),m=document.querySelectorAll(".wp-list-table.posts thead .sortable a, .wp-list-table.posts thead .sorted a"),p=document.querySelector('[name="stock_status"]'),v=e=>{const t=document.querySelector(e);return!!t&&""!==t.value&&"-1"!==t.value};null==s||s.addEventListener("click",(function(){(0,t.recordEvent)("products_list_filter_click",{search_string_length:null==_?void 0:_.value.length,filter_category:""!==u.value,filter_product_type:i.value,filter_stock_status:p.value})})),null==o||o.addEventListener("click",(function(){const e=document.querySelectorAll('[name="post[]"]:checked').length;(0,t.recordEvent)("products_list_bulk_actions_click",{selected_action:n.value,product_number:e})})),null==a||a.addEventListener("click",(function(){var e,c;(0,t.recordEvent)("products_list_bulk_edit_update",{product_number:null===(e=document.querySelector("#bulk-titles"))||void 0===e?void 0:e.children.length,product_categories:(null===(c=document.querySelectorAll('[name="tax_input[product_cat][]"]:checked'))||void 0===c?void 0:c.length)>0,comments:v('[name="comment_status"]'),status:v('[name="_status"]'),product_tags:v('[name="tax_input[product_tag]"]'),price:v('[name="change_regular_price"]'),sale:v('[name="change_sale_price"]'),tax_status:v('[name="_tax_status"]'),tax_class:v('[name="_tax_class"]'),weight:v('[name="change_weight"]'),dimensions:v('[name="change_dimensions"]'),shipping_class:v('[name="_shipping_class"]'),visibility:v('[name="_visibility"]'),featured:v('[name="_featured"]'),stock_status:v('[name="_stock_status"]'),manage_stock:v('[name="_manage_stock"]'),stock_quantity:v('[name="change_stock"]'),backorders:v('[name="_backorders"]'),sold_individually:v('[name="_sold_individually"]')})})),null==r||r.addEventListener("click",(function(){(0,t.recordEvent)("products_list_bulk_edit_cancel")})),c.forEach((e=>{e.addEventListener("click",(function(e){const c=e.target.parentElement.classList[0],n={edit:"edit",inline:"quick_edit",trash:"trash",view:"preview",duplicate:"duplicate"};n[c]&&(0,t.recordEvent)("products_list_product_action_click",{selected_action:n[c]})}))})),l.forEach((e=>{e.addEventListener("click",(function(e){const c=e.target.classList.contains("not-featured");(0,t.recordEvent)("products_list_featured_click",{featured:c?"yes":"no"})}))})),null==d||d.addEventListener("click",(function(){(0,t.recordEvent)("products_search",{search_string_length:_.value.length,filter_category:""!==u.value,filter_product_type:i.value,filter_stock_status:p.value})})),m.forEach((e=>{e.addEventListener("click",(function(e){const c=e.target.closest("th"),n=c.classList.contains("asc");(0,t.recordEvent)("products_list_column_header_click",{field_slug:c.id,order:n?"desc":"asc"})}))})),(window.wc=window.wc||{}).productTracking=e}();