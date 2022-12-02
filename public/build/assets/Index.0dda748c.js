import{_ as f}from"./AppLayout.ab36016d.js";import g from"./addCategory.627091ba.js";import{_ as p}from"./_plugin-vue_export-helper.cdc0426e.js";import{y as i,o as l,e as r,c as y,f as c,a as e,b,w,F as x,i as v,t as _}from"./app.834fdb7c.js";const M={name:"Category",metaInfo:{title:"Category"},layout:f,components:{AddCategory:g},props:{categories:Array},data(){return{category:null,addModal:!1,edit:!1,openDelete:!1,categoryToDelete:null,message:{open:!1,type:"",text:""}}},methods:{showAddModal(){this.addModal=!0},closeAddModal(){this.addModal=!1},showedit(o){console.log("edit"),this.edit=!0,this.category=o,this.showAddModal()},closeModal(){this.edit=!1,this.category=null,this.closeAddModal()}}},C={class:"px-2 lg:px-8 mt-4 sm:mt-12"},k={class:"flex items-center"},A=e("h2",{class:"text-gray-800 text-lg lg:text-2xl font-bold mr-auto"},"Categories",-1),I={class:"hidden lg:flex flex-wrap-reverse"},N={class:"lg:hidden mt-2"},B=e("button",{class:"btn-primary py-2 px-4 mr-2"},"Add new category ",-1),D={class:"bg-white shadow-md sm:rounded-lg py-4 sm:px-8 h-full mt-4"},E={class:"lg:w-full overflow-x-auto"},S={class:"w-full"},V=e("tr",{class:"text-left font-bold"},[e("th",{class:"px-6 pt-6 pb-4"},"ID"),e("th",{class:"px-6 pt-6 pb-4"},"Name"),e("th",{class:"px-6 pt-6 pb-4"},"Edit")],-1),F={class:"border-t"},L={class:"border-t"},T={class:"border-t w-10"},j=["onClick"],q=e("i",{class:"fas fa-edit"},null,-1),z=[q],G=e("i",{class:"fas fa-trash"},null,-1),H=[G],J={key:0},K=e("td",{class:"border-t px-6 py-4",colspan:"4"},"No Category found.",-1),O=[K];function P(o,s,n,Q,a,d){const h=i("add-category"),m=i("inertia-link");return l(),r("div",C,[a.addModal?(l(),y(h,{key:0,class:"fixed lg:w-1/3 md:1/2 w-full top-0 left-0 right-0 m-auto border-t fadeIn",onCloseModal:d.closeModal,onSave:o.save,onEdit:a.edit,category:a.category,edit:a.edit,errors:o.errors},null,8,["onCloseModal","onSave","onEdit","category","edit","errors"])):c("",!0),e("div",k,[A,e("div",I,[e("button",{onClick:s[1]||(s[1]=(...t)=>d.showAddModal&&d.showAddModal(...t))},[e("button",{onClick:s[0]||(s[0]=(...t)=>d.showAddModal&&d.showAddModal(...t)),class:"btn-primary mr-2"},"Add new category ")])])]),e("div",N,[b(m,{href:o.route("categories.create")},{default:w(()=>[B]),_:1},8,["href"])]),e("div",D,[e("div",E,[e("table",S,[V,(l(!0),r(x,null,v(n.categories,t=>(l(),r("tr",{key:t.id,class:""},[e("td",F,_(t.id),1),e("td",L,_(t.name),1),e("td",T,[e("button",{onClick:u=>d.showedit(t),class:"w-9 p-2 bg-blue-500 text-white rounded mx-1 mb-1 hover:bg-blue-600"},z,8,j),e("button",{onClick:s[2]||(s[2]=u=>o.deletemodal(o.resource)),class:"w-9 p-2 bg-red-500 text-white rounded hover:bg-red-600"},H)])]))),128)),n.categories.length===0?(l(),r("tr",J,O)):c("",!0)])])])])}const Y=p(M,[["render",P]]);export{Y as default};