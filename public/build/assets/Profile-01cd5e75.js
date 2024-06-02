import{A as R,N as T}from"./AppLayout-02188963.js";import{P as A}from"./PageHeader-990117fa.js";import{L as B}from"./LawyerAccount-04aab7e2.js";import{B as j}from"./BroadcastCard-7750c00d.js";import{P as E}from"./PodcastCard-c5ffd869.js";import{P as q}from"./PostCard-ca60f657.js";import{d as v,L as b,_ as $,o,c as a,k as V,A as I,h as P,m as _,b as s,t as i,e as n,w as H,v as U,f as m,l,i as L,F as w,r as g,n as D,y as F,z as Q,H as O}from"./app-5a739dd9.js";import{_ as K}from"./avatar-3c7742fa.js";import{A as W}from"./ArchiveCard-8dfc372f.js";import{E as Y}from"./EventCard-1f59efc2.js";import{P as G}from"./ProfileSection-5bbdefa5.js";import{L as J}from"./LawyerReviewCard-5a1927ae.js";import{M as X}from"./Modal-94d7f363.js";import{C as Z,S as x,P as ee,N as se}from"./carousel.es-51616c9f.js";import{_ as te}from"./default_avatar_men-3c7742fa.js";import"./AuthenticationCardLogo-429b0775.js";import"./Button-835ef4ee.js";import"./Input-8812850b.js";import"./Checkbox-8a3a1a61.js";import"./Label-fbb29e9e.js";import"./ValidationErrors-bf47aed9.js";import"./TimeSlotsSkeleton-997ef08c.js";import"./SpinnerLoader-b538aed9.js";import"./VueGoogleAutocomplete-58f0ebf9.js";import"./TableTHead-be63eee7.js";import"./TablePagination-6ccfb30e.js";import"./PaginationMixin-11bee913.js";import"./Breadcrums-4d6b2de8.js";import"./CardSkeleton-160dac99.js";import"./podcast-d52a64c8.js";import"./image-3ef26202.js";import"./course-aea85fdd.js";const oe=v({components:{Link:b},props:{background_color:{},add_col:{default:!0}},created(){},data(){return{}},methods:{}}),ie=I('<div class="card card-product card-bg-alt border-0"><div class="card-body"><div class="overflow-hidden text-center position-relative"><img class="img-fluid mt-3" src="'+K+'" alt="image"></div><div class="d-flex flex-column align-items-center"><h4 class="lh-1 fs-5 mb-0">Lawyer Product Name</h4><span class="rating text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span><button class="btn btn-primary">Buy Now</button></div></div></div>',1),ae=[ie];function re(e,t,y,u,k,C){return o(),a("div",{class:V({"col-md-3":e.add_col})},ae,2)}const ne=$(oe,[["render",re]]),le=v({components:{Link:b,Modal:X},created(){},props:["lawyer_id"],data(){return{id:"RatingModal",form:this.$inertia.form({comment:"",rating:5,experience:5,communication:5,service:5,lawyer_id:this.lawyer_id})}},methods:{close(){document.getElementById(this.id+"close").click()},resetForm(){this.form=this.$inertia.form({comment:"",rating:5,experience:5,communication:5,service:5,lawyer_id:this.lawyer_id})},submit(){this.form.post(this.route("customers.add_lawyer_review"),{preserveState:!0,preserveScroll:!0,onSuccess:()=>{this.close(),this.resetForm()}})}}}),de={class:"modal-content"},ce={class:"modal-header"},me={class:"modal-title fs-5",id:"RatingModalLabel"},pe=["id"],_e={class:"modal-body"},ue={class:"rating text-center fs-3 text-warning"},he={class:"form-group"},ye={key:0},fe=s("hr",null,null,-1),we={class:"d-flex justify-content-center"},ge={class:"user-rating w-75"},ve={class:"me-3 w-50"},be={class:"rating"},$e={class:"me-3 w-50"},ke={class:"rating"},Ce={class:"me-3 w-50"},Pe={class:"rating"},Le={class:"modal-footer"},Se={type:"button",class:"btn btn-secondary","data-bs-dismiss":"modal"};function Ve(e,t,y,u,k,C){const p=l("star-rating"),h=l("Modal");return o(),P(h,{maxWidth:"md",id:e.id},{default:_(()=>[s("div",de,[s("div",ce,[s("h1",me,i(e.__("write a review")),1),s("button",{type:"button",id:e.id+"close",class:"btn-close","data-bs-dismiss":"modal","aria-label":"Close"},null,8,pe)]),s("div",_e,[s("div",ue,[n(p,{modelValue:e.form.rating,"onUpdate:modelValue":t[0]||(t[0]=r=>e.form.rating=r),"star-size":25},null,8,["modelValue"])]),s("div",he,[H(s("textarea",{"onUpdate:modelValue":t[1]||(t[1]=r=>e.form.comment=r),class:"form-control",id:"",cols:"30",rows:"3"},null,512),[[U,e.form.comment]]),e.form.errors.comment?(o(),a("span",ye,i(e.form.errors.comment),1)):m("",!0)]),fe,s("div",we,[s("ul",ge,[s("li",null,[s("span",ve,i(e.__("experience")),1),s("div",be,[n(p,{modelValue:e.form.experience,"onUpdate:modelValue":t[2]||(t[2]=r=>e.form.experience=r),"star-size":25},null,8,["modelValue"])])]),s("li",null,[s("span",$e,i(e.__("service")),1),s("div",ke,[n(p,{modelValue:e.form.service,"onUpdate:modelValue":t[3]||(t[3]=r=>e.form.service=r),"star-size":25},null,8,["modelValue"])])]),s("li",null,[s("span",Ce,i(e.__("communication")),1),s("div",Pe,[n(p,{modelValue:e.form.communication,"onUpdate:modelValue":t[4]||(t[4]=r=>e.form.communication=r),"star-size":25},null,8,["modelValue"])])])])])]),s("div",Le,[s("button",Se,i(e.__("close")),1),s("button",{onClick:t[5]||(t[5]=(...r)=>e.submit&&e.submit(...r)),type:"button",class:"btn btn-primary"},i(e.__("share your experience")),1)])])]),_:1},8,["id"])}const Ne=$(le,[["render",Ve]]);const Me=v({components:{LawyerReviewCard:J,AddReviewModal:Ne,Link:b,Carousel:Z,Slide:x,Pagination:ee,Navigation:se},created(){this.rating_groups=this.reviews.reduce((e,t)=>((e[t.rating]=e[t.rating]||[]).push(t),e),{}),this.rating_group_keys=Object.keys(this.rating_groups).sort((e,t)=>t.localeCompare(e))},props:["reviews","lawyer","lawyer_id"],data(){return{rating_groups:[],rating_group_keys:[],form:this.$inertia.form({}),featured_lawyers:[],settings:{itemsToShow:1,snapAlign:"start"},breakpoints:{700:{itemsToShow:3,snapAlign:"start"},1024:{itemsToShow:3,snapAlign:"start"}}}},methods:{submit(){},next(){this.$refs.carousel.next()},prev(){this.$refs.carousel.prev()}}}),N=e=>(F("data-v-8ea4e2a2"),e=e(),Q(),e),ze={class:"section py-5"},Re={class:"container"},Te={class:"row"},Ae={class:"col-12 mb-4"},Be={class:"d-flex align-items-center justify-content-between"},je=N(()=>s("span",{class:"circle","aria-hidden":"true"},[s("span",{class:"icon arrow"})],-1)),Ee={class:"button-text"},qe={class:"col-md-12 mb-4"},Ie={key:0,class:"rating fs-3 text-warning"},He={class:"display-3 mb-0 lh-1 text-dark"},Ue=N(()=>s("span",{class:"fs-2"},"5",-1)),De={class:"user-rating"},Fe={class:"rating"},Qe=["aria-valuenow"],Oe={key:1,class:"col-md-12 d-flex justify-content-end"},Ke={class:"btn btn-primary border-0","data-bs-toggle":"modal","data-bs-target":"#RatingModal"},We={class:"col-md-12"},Ye={key:0,class:"row"},Ge={key:1,class:"row"},Je={class:"col-12"};function Xe(e,t,y,u,k,C){const p=l("Link"),h=l("star-rating"),r=l("lawyer-review-card"),d=l("Slide"),f=l("Pagination"),S=l("Carousel"),M=l("add-review-modal");return o(),a("div",ze,[s("div",Re,[s("div",Te,[s("div",Ae,[s("div",Be,[s("h2",null,i(e.__("rating and reviews")),1),n(p,{href:e.route("lawyer.reviews",{user_name:e.lawyer.user_name}),class:"learn-more btn position-relative"},{default:_(()=>[je,s("span",Ee,i(e.__("view all")),1)]),_:1},8,["href"])])]),s("div",qe,[e.lawyer.rating>0?(o(),a("div",Ie,[s("h2",He,[L(i(e.lawyer.rating)+"/",1),Ue]),n(h,{rating:e.lawyer.rating,"star-size":25,"read-only":!0,increment:.01,"show-rating":!1},null,8,["rating","increment"])])):m("",!0),s("ul",De,[(o(!0),a(w,null,g(e.rating_group_keys,(c,z)=>(o(),a("li",{key:z},[s("div",Fe,[n(h,{rating:c,"star-size":18,"read-only":!0,increment:.01,"show-rating":!1},null,8,["rating","increment"])]),s("div",{class:"progress mx-3",role:"progressbar","aria-label":"rating-bar","aria-valuenow":c,"aria-valuemin":"0","aria-valuemax":"5"},[s("div",{class:"progress-bar bg-warning",style:D({width:c*20+"%"})},null,4)],8,Qe),s("span",null,i(e.rating_groups[c].length),1)]))),128))]),e.$page.props.auth&&e.$page.props.auth.user.email_verified_at&&e.$page.props.auth.logged_in_as=="customer"?(o(),a("div",Oe,[s("button",Ke,i(e.__("write a review")),1)])):m("",!0)]),s("div",We,[e.reviews.length>0?(o(),a("div",Ye,[n(S,{settings:e.settings,breakpoints:e.breakpoints,ref:"carousel",modelValue:e.currentSlide,"onUpdate:modelValue":t[0]||(t[0]=c=>e.currentSlide=c)},{addons:_(()=>[n(f)]),default:_(()=>[(o(!0),a(w,null,g(e.reviews,c=>(o(),P(d,{key:c.id},{default:_(()=>[n(r,{review:c},null,8,["review"])]),_:2},1024))),128))]),_:1},8,["settings","breakpoints","modelValue"])])):(o(),a("div",Ge,[s("div",Je,i(e.__("no review found")),1)]))])])]),n(M,{lawyer_id:e.lawyer_id},null,8,["lawyer_id"])])}const Ze=$(Me,[["render",Xe],["__scopeId","data-v-8ea4e2a2"]]);const xe=v({components:{AppLayout:R,Navbar:T,PageHeader:A,LawyerAccount:B,BroadcastCard:j,PodcastCard:E,ProfileSection:G,PostCard:q,LawyerProductCard:ne,ArchiveCard:W,EventCard:Y,LawyerProfileReviewsSection:Ze,Head:O,Link:b},data(){return{lawyer:this.$page.props.lawyer}},mounted(){},props:["appointment_types"],methods:{checkLoginAndRedirect(e,t){this.$page.props.auth?this.$page.props.auth.logged_in_as=="customer"?this.$inertia.visit(route("lawyer.book_appointment",{user_name:e.user_name,type:t.type})):this.$toast.warning("You must log in as a customer"):(this.$toast.warning("Please login first"),this.$inertia.visit(route("login"),{data:{is_redirect:1}}))},submit(){},logEvent(e){},copyProfile(){var e=document.getElementById("copyProfile");e.select(),e.setSelectionRange(0,99999),navigator.clipboard.writeText(e.value),this.$toast.success("Profile link copied to Clipboard")},generateQRCode(){let e=document.getElementById("website").value,t=document.getElementById("qrcode");var y=t.innerHTML!=="";if(e&&!y){let u=document.getElementById("qrcode");u.innerHTML="",new QRCode(u,{text:e,width:128,height:128,colorDark:"rgb(38, 41, 41)",colorLight:"#ffffff",correctLevel:QRCode.CorrectLevel.H}),document.getElementById("qrcode-container").style.display="block"}else t.innerHTML=""}}}),es={class:"section py-5"},ss={class:"container"},ts={class:"row mb-4"},os={class:"col-12"},is=["src"],as={key:1,class:"cover-header rounded-2"},rs={class:"row"},ns={class:"col-lg-3"},ls={class:"profile-image mx-4 shadow rounded-2",style:{"background-color":"#e4e4e4","max-height":"300px"}},ds=["src"],cs={key:1,class:"img-fluid mt-4",src:te,alt:"image"},ms={class:"d-flex align-items-center justify-content-center mt-3"},ps={class:"text-muted small mt-1 ps-1"},_s=s("div",{class:"d-flex align-items-center justify-content-center mt-2"},[s("span",{class:"d-flex text-muted",style:{"font-size":"14px"}},[s("i",{class:"bi bi-circle-fill"}),L(),s("span",{class:"ms-1"},"Offline")])],-1),us={class:"fw-bold text-center"},hs={class:"social-share justify-content-center"},ys=["href"],fs=s("i",{class:"bi bi-envelope"},null,-1),ws=[fs],gs=["href"],vs=s("i",{class:"bi bi-facebook"},null,-1),bs=[vs],$s=["href"],ks=s("i",{class:"bi bi-whatsapp"},null,-1),Cs=[ks],Ps=["value"],Ls=s("i",{class:"bi bi-check2-all"},null,-1),Ss=[Ls],Vs=["value","placeholder"],Ns=s("i",{class:"bi bi-qr-code-scan"},null,-1),Ms=[Ns],zs=s("div",{id:"qrcode-container",class:"p-4 d-flex justify-content-center"},[s("div",{id:"qrcode",class:"qrcode"})],-1),Rs={class:"col-lg-9"},Ts={class:"card border-0 bg-transparent"},As={class:"card-body p-0"},Bs={class:"d-md-flex align-items-center justify-content-between mb-3 flex-wrap"},js={class:"mb-0 mb-md-0 fs-6 d-flex align-items-center text-capitalize"},Es={key:0,class:"bi bi-patch-check-fill fs-5 me-2 text-primary"},qs={key:0,class:"text-muted"},Is={key:1,class:"fw-normal small ps-1 ms-2",style:{"border-left":"2px solid"}},Hs={class:"d-flex align-items-center flex-wrap"},Us={key:0},Ds=["onClick"],Fs={class:"mb-3 text-start"},Qs={class:"list-unstyled mb-0"},Os=["innerHTML"],Ks={class:"row"},Ws={key:0,class:"col-md-4 text-start"},Ys={class:"fs-6"},Gs={key:0,class:"mb-0"},Js={key:1,class:"mb-0"},Xs={key:1,class:"col-md-4 text-start"},Zs={class:"fs-6"},xs={class:"mb-0"};function et(e,t,y,u,k,C){const p=l("star-rating"),h=l("lawyer-profile-reviews-section"),r=l("app-layout");return o(),P(r,{title:"Profile"},{header:_(()=>[]),default:_(()=>[s("div",es,[s("div",ss,[s("div",ts,[s("div",os,[e.lawyer.cover_image?(o(),a("img",{key:0,class:"img-fluid",src:e.lawyer.cover_image,alt:"image"},null,8,is)):(o(),a("div",as))])]),s("div",rs,[s("div",ns,[s("div",ls,[e.lawyer.image?(o(),a("img",{key:0,class:"img-fluid w-100 rounded",src:e.lawyer.image,alt:"image",style:{"object-fit":"contain"}},null,8,ds)):(o(),a("img",cs))]),s("div",ms,[n(p,{rating:e.lawyer.rating,"star-size":16,"read-only":!0,increment:.01,"show-rating":!1},null,8,["rating","increment"]),s("span",ps,"("+i(e.lawyer.rating)+"/5)",1)]),_s,s("h6",us,i(e.__("Share My Profile")),1),s("ul",hs,[s("li",null,[s("a",{href:"mailto:?subject=See My Profile&body=Check out this Profile "+e.hostName()+"/lawyer/profile/"+e.lawyer.user_name,title:"Share by Email"},ws,8,ys)]),s("li",null,[s("a",{target:"_blank",href:"https://www.facebook.com/sharer.php?u="+e.hostName()+"/lawyer/profile/"+e.lawyer.user_name},bs,8,gs)]),s("li",null,[s("a",{target:"_blank",href:"https://api.whatsapp.com/send?text="+e.hostName()+"/lawyer/profile/"+e.lawyer.user_name},Cs,8,$s)]),s("li",null,[s("input",{type:"text",class:"border-0",style:{visibility:"hidden",width:"0"},id:"copyProfile",value:e.hostName()+"/profile/"+e.lawyer.user_name},null,8,Ps),s("button",{type:"button",onClick:t[0]||(t[0]=d=>e.copyProfile()),"data-bs-container":"body","data-bs-toggle":"popover","data-bs-placement":"top","data-bs-content":"Top popover",class:"position-absolute"},Ss)]),s("li",null,[s("input",{type:"url",id:"website",class:"border-0",style:{visibility:"hidden",width:"0"},value:e.hostName()+"/lawyer/profile/"+e.lawyer.user_name,name:"website",placeholder:e.hostName(),required:""},null,8,Vs),s("button",{type:"button",onClick:t[1]||(t[1]=d=>e.generateQRCode())},Ms)])]),zs]),s("div",Rs,[s("div",Ts,[s("div",As,[s("div",Bs,[s("h2",js,[e.lawyer.is_featured?(o(),a("i",Es)):m("",!0),s("span",null,[L(i(e.lawyer.name)+" ",1),e.lawyer.law_firm_name?(o(),a("small",qs,"("+i(e.lawyer.law_firm_name)+")",1)):m("",!0)]),e.lawyer.distance?(o(),a("span",Is," ( "+i(e.formatDecimal(e.lawyer.distance))+" Km) Away",1)):m("",!0)]),s("div",Hs,[e.lawyer.appointment_types?(o(),a("div",Us,[(o(!0),a(w,null,g(e.lawyer.appointment_types,(d,f)=>(o(),a("button",{type:"button",key:f,onClick:S=>e.checkLoginAndRedirect(e.lawyer,d.appointment_type),class:"ms-2 btn btn-primary mt-2 mt-md-0"},i(d.appointment_type.display_name),9,Ds))),128))])):m("",!0)])]),s("div",Fs,[s("ul",Qs,[(o(!0),a(w,null,g(e.lawyer.lawyer_categories,(d,f)=>(o(),a("li",{class:V(["me-2 d-inline-block pe-2",{"border-end":f!=e.lawyer.lawyer_categories.length-1}]),style:{"font-size":"12px"},key:d.id},i(d.name),3))),128))])])])]),s("div",{style:{"font-size":"14px"},innerHTML:e.lawyer.description,class:"text-start mb-3"},null,8,Os),s("div",Ks,[e.lawyer.experience?(o(),a("div",Ws,[s("h6",Ys,i(e.__("experience")),1),e.lawyer.experience==1?(o(),a("p",Gs,i(e.lawyer.experience)+" "+i(e.__("year")),1)):(o(),a("p",Js,i(e.lawyer.experience)+" "+i(e.__("years")),1))])):m("",!0),e.lawyer.speciality?(o(),a("div",Xs,[s("h6",Zs,i(e.__("speciality")),1),s("p",xs,i(e.lawyer.speciality),1)])):m("",!0)])])])])]),n(h,{lawyer_id:e.lawyer.id,lawyer:e.lawyer,reviews:e.lawyer.lawyer_reviews},null,8,["lawyer_id","lawyer","reviews"])]),_:1})}const Tt=$(xe,[["render",et]]);export{Tt as default};