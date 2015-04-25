<div class="panel summary-panel curved">
    <div class="panel-header">Request Domain</div>
          <div class="centerM curved" >
            <div class="panel-body">
            
  <div id="request-domain-form" >
   <div class="modal-header">
    <h3>Request Domain</h3>
   </div>
   <div class="modal-body">
    <div class="form-inline">
     <div class="input-prepend">
      <span class="add-on">www.</span><input type="text" class="form-text" id="domain-name" size="20" />
     </div>
     <select id="domain-ext" class="form-select">
      {foreach from=$domains key=k item=v}
      <option value="{$k}">.{$k}</option>
      {/foreach}
     </select>
     <div class="sep-10"></div>
     <div id="domain-check-result">
      <p></p>
     </div>
    </div>
   </div>
    <a href="#" class="btn btn-primary" id="confirm-request-domain">Send</a>
  </div>
  
     </div>
  </div>
  </div>      