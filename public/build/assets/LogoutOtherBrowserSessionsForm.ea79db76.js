import{d as p,u as v,o as a,c as k,w as o,g as r,e as n,F as x,i as b,a as s,t as c,f as B,b as l,h as i,J as S,n as C}from"./app.834fdb7c.js";import{_ as L}from"./ActionMessage.ff07ba12.js";import{a as M,b as O}from"./DialogModal.0496ee06.js";import{_ as V,a as $}from"./TextInput.89f61dd0.js";import{_ as w}from"./PrimaryButton.d3286a03.js";import{_ as F}from"./SecondaryButton.d1eb786b.js";import"./SectionTitle.e3821b39.js";import"./_plugin-vue_export-helper.cdc0426e.js";const I=s("div",{class:"max-w-xl text-sm text-gray-600"}," If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password. ",-1),N={key:0,class:"mt-5 space-y-6"},z={key:0,fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"w-8 h-8 text-gray-500"},K=s("path",{d:"M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"},null,-1),T=[K],U={key:1,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round",class:"w-8 h-8 text-gray-500"},j=s("path",{d:"M0 0h24v24H0z",stroke:"none"},null,-1),D=s("rect",{x:"7",y:"4",width:"10",height:"16",rx:"1"},null,-1),E=s("path",{d:"M11 5h2M12 17v.01"},null,-1),H=[j,D,E],P={class:"ml-3"},A={class:"text-sm text-gray-600"},J={class:"text-xs text-gray-500"},q={key:0,class:"text-green-500 font-semibold"},G={key:1},Q={class:"flex items-center mt-5"},R={class:"mt-4"},as={__name:"LogoutOtherBrowserSessionsForm",props:{sessions:Array},setup(m){const d=p(!1),u=p(null),t=v({password:""}),y=()=>{d.value=!0,setTimeout(()=>u.value.focus(),250)},h=()=>{t.delete(route("other-browser-sessions.destroy"),{preserveScroll:!0,onSuccess:()=>_(),onError:()=>u.value.focus(),onFinish:()=>t.reset()})},_=()=>{d.value=!1,t.reset()};return(W,f)=>(a(),k(M,null,{title:o(()=>[r(" Browser Sessions ")]),description:o(()=>[r(" Manage and log out your active sessions on other browsers and devices. ")]),content:o(()=>[I,m.sessions.length>0?(a(),n("div",N,[(a(!0),n(x,null,b(m.sessions,(e,g)=>(a(),n("div",{key:g,class:"flex items-center"},[s("div",null,[e.agent.is_desktop?(a(),n("svg",z,T)):(a(),n("svg",U,H))]),s("div",P,[s("div",A,c(e.agent.platform?e.agent.platform:"Unknown")+" - "+c(e.agent.browser?e.agent.browser:"Unknown"),1),s("div",null,[s("div",J,[r(c(e.ip_address)+", ",1),e.is_current_device?(a(),n("span",q,"This device")):(a(),n("span",G,"Last active "+c(e.last_active),1))])])])]))),128))])):B("",!0),s("div",Q,[l(w,{onClick:y},{default:o(()=>[r(" Log Out Other Browser Sessions ")]),_:1}),l(L,{on:i(t).recentlySuccessful,class:"ml-3"},{default:o(()=>[r(" Done. ")]),_:1},8,["on"])]),l(O,{show:d.value,onClose:_},{title:o(()=>[r(" Log Out Other Browser Sessions ")]),content:o(()=>[r(" Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices. "),s("div",R,[l(V,{ref_key:"passwordInput",ref:u,modelValue:i(t).password,"onUpdate:modelValue":f[0]||(f[0]=e=>i(t).password=e),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:S(h,["enter"])},null,8,["modelValue","onKeyup"]),l($,{message:i(t).errors.password,class:"mt-2"},null,8,["message"])])]),footer:o(()=>[l(F,{onClick:_},{default:o(()=>[r(" Cancel ")]),_:1}),l(w,{class:C(["ml-3",{"opacity-25":i(t).processing}]),disabled:i(t).processing,onClick:h},{default:o(()=>[r(" Log Out Other Browser Sessions ")]),_:1},8,["class","disabled"])]),_:1},8,["show"])]),_:1}))}};export{as as default};
