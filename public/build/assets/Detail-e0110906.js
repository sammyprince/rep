import{A as r,N as l}from"./AppLayout-02188963.js";import{P as _}from"./PageHeader-990117fa.js";import{B as p}from"./Breadcrums-4d6b2de8.js";import{_ as m}from"./podcast-d52a64c8.js";import{_ as h,d as u,o as t,h as v,m as f,l as a,b as s,c as o,t as i,e as g,f as c}from"./app-5a739dd9.js";const y=u({components:{AppLayout:r,Navbar:l,PageHeader:_,Breadcrums:p},props:["podcast"],created(){},data(){return{posts:{},breadcrums:[{id:1,name:"Home",link:"/"},{id:2,name:"Podcasts",link:""}]}}}),k={class:"py-5 border-bottom border-dark"},b={class:"container"},w={class:"row"},C={class:"col-12"},P={key:0},B=["innerHTML"],H={key:1},T={key:2},L=s("h2",{class:"fs-2 text-center"},[s("span",{class:"fw-normal"},"Explore | "),s("span",{class:"fw-bold"},"All Podcast")],-1),N=[L],M={class:"section py-5"},$={class:"container"},j={class:"row"},A={class:"col-12"},V={class:"row"},D={class:"col-md-6"},E={class:"",style:{height:"450px"}},z=["src"],S={key:1,class:"img-fluid w-100 rounded",src:m,alt:"image",style:{height:"450px","object-fit":"cover"}},q={class:"col-md-6"},F={class:"text-start text-capitalize"},G=["innerHTML"],I={class:"d-flex justify-content-center"},J={key:0},K={key:0,width:"400",controls:""},O=["src"],Q={key:1,controls:""},R=["src"],U={key:1},W=["src"];function X(e,Y,Z,x,ss,es){const d=a("breadcrums"),n=a("app-layout");return t(),v(n,{title:"podcast"},{default:f(()=>[s("div",k,[s("div",b,[s("div",w,[s("div",C,[e.getPageContentType("podcasts_page_description")=="textarea"?(t(),o("div",P,[s("div",{innerHTML:e.getPageContent("podcasts_page_description")},null,8,B)])):e.getPageContentType("podcasts_page_description")=="text"?(t(),o("div",H,[s("p",null,i(e.getPageContent("podcasts_page_description")??"-"),1)])):(t(),o("div",T,N)),g(d,{breadcrums:e.breadcrums},null,8,["breadcrums"])])])])]),s("div",M,[s("div",$,[s("div",j,[s("div",A,[s("div",V,[s("div",D,[s("div",E,[e.podcast.image?(t(),o("img",{key:0,class:"img-fluid w-100 rounded",src:e.podcast.image,alt:"image",style:{height:"450px","object-fit":"cover"}},null,8,z)):(t(),o("img",S))])]),s("div",q,[s("h1",F,i(e.podcast.name),1),s("div",{class:"mb-3",innerHTML:e.podcast.description},null,8,G),s("div",I,[e.podcast.link_type=="internal"?(t(),o("div",J,[e.podcast.file_type=="video"?(t(),o("video",K,[s("source",{src:e.podcast.video},null,8,O)])):c("",!0),e.podcast.file_type=="audio"?(t(),o("audio",Q,[s("source",{src:e.podcast.audio},null,8,R)])):c("",!0)])):(t(),o("div",U,[s("iframe",{width:"420",height:"315",src:e.podcast.file_url},`
                      `,8,W)]))])])])])])])])]),_:1})}const ds=h(y,[["render",X]]);export{ds as default};