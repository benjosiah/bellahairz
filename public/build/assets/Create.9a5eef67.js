import{_ as l}from"./AppLayout.99d3d019.js";import{L as d,S as m,T as c,a as p,F as u}from"./FileInput.0f16e491.js";import{y as f,o as x,e as _,a as e,b,w as h,g as n,m as g,v,E as w}from"./app.73e7a88f.js";import{_ as y}from"./_plugin-vue_export-helper.cdc0426e.js";const k={name:"CreateProduct",metaInfo:{title:"Add Product"},layout:l,components:{LoadingButton:d,SelectInput:m,TextInput:c,TextareaInput:p,FileInput:u},props:{categories:Object},remember:"form",data(){return{form:this.$inertia.form({name:""})}},methods:{submit(){this.form.transform(s=>({...s})).post(route("categories.store"))}}},C={class:"py-4 sm:py-12"},I={class:"max-w-screen-lg mx-auto px-2 sm:px-6 lg:px-8 text-gray-700 flex flex-col justify-center"},T={class:"mb-4 sm:mb-8 font-bold text-base sm:text-xl lg:text-3xl"},B=e("span",{class:"brand-text font-medium"},"/",-1),N={class:"bg-white overflow-hidden shadow-md rounded-lg px-2 py-6 lg:p-10 max-w-2xl"},P={class:"p-2 lg:p-8 -mr-6 -mb-8"},S={class:"w-full"},V=e("div",{class:""},[e("label",{class:"text-gray-800 font-semibold"},"Product Name")],-1),j={class:""},E=e("div",{class:"sm:px-8 py-4 flex justify-end items-center"},[e("button",{class:"w-full sm:w-auto inline-block mt-8 lg:mt-2 bg-brand rounded py-2 px-4 lg:px-6 text-white font-bold hover:bg-green-800",type:"submit"},"Save Product ")],-1);function F(s,t,L,M,r,a){const i=f("inertia-link");return x(),_("div",C,[e("div",I,[e("h1",T,[b(i,{class:"brand-text hover:text-green-800",href:s.route("products.index")},{default:h(()=>[n(" categories ")]),_:1},8,["href"]),B,n(" Create ")]),e("div",N,[e("form",{onSubmit:t[1]||(t[1]=g((...o)=>a.submit&&a.submit(...o),["prevent"]))},[e("div",P,[e("div",S,[V,e("div",j,[v(e("input",{type:"text",class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":t[0]||(t[0]=o=>r.form.name=o)},null,512),[[w,r.form.name]])])])]),E],32)])])])}const U=y(k,[["render",F]]);export{U as default};