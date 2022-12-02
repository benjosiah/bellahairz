import{_ as b}from"./AppLayout.ab36016d.js";import{L as x,S as g,T as h,a as v,F as y}from"./FileInput.c4d14f32.js";import{y as w,o as n,e as d,a as t,b as P,w as I,g as u,m as S,v as l,E as i,G as T,F as E,i as N,t as k}from"./app.834fdb7c.js";import{_ as C}from"./_plugin-vue_export-helper.cdc0426e.js";const c=.05,M="mins",U="hrs",p="days",m={[M]:1,[U]:60,[p]:1440},V={name:"CreateProduct",metaInfo:{title:"Add Product"},layout:b,components:{LoadingButton:x,SelectInput:g,TextInput:h,TextareaInput:v,FileInput:y},props:{categories:Object},remember:"form",data(){return{lead_time:{amount:null,unit:p},form:this.$inertia.form({name:"",description:"",price:0,stock:0,category_id:"",image:null})}},methods:{submit(){this.form.transform(o=>({...o})).post(route("products.store"))},collectFileIds(o){this.form.mediaIds.push(o.id)},fromMinutes(o,e){return o==null?null:o/m[e]},toMinutes(o,e){return o==null||o===""?null:o*m[e]}},computed:{leadTimeInMinutes(){return this.toMinutes(this.lead_time.amount,this.lead_time.unit)},paymentCharge(){return(Number(this.form.price)*c).toFixed(2)},amountReceived(){return(Number(this.form.price)*(1-c)).toFixed(2)}}},F={class:"py-4 sm:py-12"},L={class:"max-w-screen-lg mx-auto px-2 sm:px-6 lg:px-8 text-gray-700 flex flex-col justify-center"},Y={class:"mb-4 sm:mb-8 font-bold text-base sm:text-xl lg:text-3xl"},B=t("span",{class:"brand-text font-medium"},"/",-1),D={class:"bg-white overflow-hidden shadow-md rounded-lg px-2 py-6 lg:p-10 max-w-2xl"},R={class:"p-2 lg:p-8 -mr-6 -mb-8"},j={class:"w-full"},A=t("div",{class:""},[t("label",{class:"text-gray-800 font-semibold"},"Product Name")],-1),K={class:""},O={class:"w-full"},G=t("div",{class:""},[t("label",{class:"text-gray-800 font-semibold"},"Product Description")],-1),H={class:""},q={class:"w-full"},z=t("div",{class:""},[t("label",{class:"text-gray-800 font-semibold"},"Product Category")],-1),J={class:""},Q=t("option",{value:""},"Select Category",-1),W=["value"],X={class:"w-full"},Z=t("div",{class:""},[t("label",{class:"text-gray-800 font-semibold"},"Product Peice")],-1),$={class:""},tt={class:"w-full"},et=t("div",{class:""},[t("label",{class:"text-gray-800 font-semibold"},"Product Stock")],-1),st={class:""},ot={class:"my-8"},rt={class:"mt-3"},lt=t("p",{class:"subtitle text-gray-800"}," Product image ",-1),it=t("div",{class:"sm:px-8 py-4 flex justify-end items-center"},[t("button",{class:"w-full sm:w-auto inline-block mt-8 lg:mt-2 bg-brand rounded py-2 px-4 lg:px-6 text-white font-bold hover:bg-green-800",type:"submit"},"Save Product ")],-1);function nt(o,e,f,dt,r,a){const _=w("inertia-link");return n(),d("div",F,[t("div",L,[t("h1",Y,[P(_,{class:"brand-text hover:text-green-800",href:o.route("products.index")},{default:I(()=>[u(" Products ")]),_:1},8,["href"]),B,u(" Create ")]),t("div",D,[t("form",{onSubmit:e[6]||(e[6]=S((...s)=>a.submit&&a.submit(...s),["prevent"]))},[t("div",R,[t("div",j,[A,t("div",K,[l(t("input",{type:"text",class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":e[0]||(e[0]=s=>r.form.name=s)},null,512),[[i,r.form.name]])])]),t("div",O,[G,t("div",H,[l(t("input",{type:"text",class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":e[1]||(e[1]=s=>r.form.description=s)},null,512),[[i,r.form.description]])])]),t("div",q,[z,t("div",J,[l(t("select",{class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":e[2]||(e[2]=s=>r.form.category_id=s)},[Q,(n(!0),d(E,null,N(f.categories,s=>(n(),d("option",{value:s.id},k(s.name),9,W))),256))],512),[[T,r.form.category_id]])])]),t("div",X,[Z,t("div",$,[l(t("input",{type:"text",class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":e[3]||(e[3]=s=>r.form.price=s)},null,512),[[i,r.form.price]])])]),t("div",tt,[et,t("div",st,[l(t("input",{type:"text",class:"w-full p-2 border border-gray-400 rounded","onUpdate:modelValue":e[4]||(e[4]=s=>r.form.stock=s)},null,512),[[i,r.form.stock]])])]),t("div",ot,[t("div",rt,[lt,t("p",null,[t("input",{type:"file",class:"w-full p-2 border border-gray-400 rounded",onInput:e[5]||(e[5]=s=>r.form.image=s.target.files[0])},null,32)])])])]),it],32)])])])}const pt=C(V,[["render",nt]]);export{pt as default};
