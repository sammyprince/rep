import{A as C,N as k}from"./AppLayout-02188963.js";import{P as T}from"./PageHeader-990117fa.js";import{_ as d,o as t,c as a,A as r,d as h,b as e,f as i,e as n,l as o,P as D,h as I,m as b,i as P,t as u,y as N,z as V}from"./app-5a739dd9.js";const S={},q=r('<h5 class="mb-3">Please Enter Your Details </h5><form action><div class="row g-4"><div class="col-md-6"><label class="form-label required">First Name</label><input type="text" class="form-control" required></div><div class="col-md-6"><label class="form-label required">Last Name</label><input type="text" required class="form-control"></div><div class="col-md-6"><label class="form-label required">Email</label><input type="email" required class="form-control"></div><div class="col-md-6"><label class="form-label required">Phone</label><input type="text" required class="form-control"></div><div class="col-md-6"><label class="form-label required">State</label><select class="form-select" aria-label="Default select example"><option selected>Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="col-md-6"><label class="form-label required">City</label><select class="form-select" aria-label="Default select example"><option selected>Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="col-12"><div class="d-flex"><label class="form-label required">Do you have documents with you?</label><div class="form-check ms-4"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"><label class="form-check-label" for="flexRadioDefault1"> Yes </label></div><div class="form-check ms-4"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked><label class="form-check-label" for="flexRadioDefault2"> No </label></div></div></div></div></form>',2),z=[q];function A(s,l,p,m,v,_){return t(),a("div",null,z)}const E=d(S,[["render",A]]),B=h({data(){return{paymentDone:0}},methods:{onPayment(){this.paymentDone=1}}}),R={class:"mt-3"},M=e("h5",{class:"mb-4"},"Make Payment For Video Call ",-1),W={key:0,class:"tabs payment-tabs p-4 rounded-lg shadow"},Y=r('<div class="p-3 mb-4 rounded-lg bg-primary-light"><div class="row align-items-center"><div class="col-md-6"><div class="row"><div class="col-12"><label class="fs-6">Initial Value</label><span class="small fw-normal ps-3">$600</span></div><div class="col-12"><label class="fs-6">Initial Value</label><span class="small fw-normal ps-3">$600</span></div></div></div><div class="col-md-6"><label class="fs-6">Total Payment</label><span class="small fw-normal ps-3">$1200</span></div></div></div>',1),O=e("ul",{class:"nav nav-pills mb-3",id:"pills-tab",role:"tablist"},[e("li",{class:"nav-item me-3",role:"presentation"},[e("button",{class:"nav-link active",id:"pills-home-tab","data-bs-toggle":"pill","data-bs-target":"#pills-home",type:"button",role:"tab","aria-controls":"pills-home","aria-selected":"true"},[e("img",{src:"https://i.imgur.com/sB4jftM.png",width:"80"})])]),e("li",{class:"nav-item me-3",role:"presentation"},[e("button",{class:"nav-link",id:"pills-profile-tab","data-bs-toggle":"pill","data-bs-target":"#pills-profile",type:"button",role:"tab","aria-controls":"pills-profile","aria-selected":"false"},[e("img",{src:"https://i.imgur.com/yK7EDD1.png",width:"80"})])])],-1),F={class:"tab-content",id:"pills-tabContent"},L={class:"tab-pane fade show active",id:"pills-home",role:"tabpanel","aria-labelledby":"pills-home-tab"},j={action:""},H={class:"row g-4"},K=r('<div class="col-12"><label>Credit Card</label><span class="small fw-normal ps-3">Enter the 16 digit card number</span></div><div class="col-12"><div class="main-input mb-3"><input type="text" class="form-control"></div></div><div class="col-md-6"><label>Expiration Date</label><p class="mb-0 small">Enter the expiration date of card</p></div><div class="col-md-3"><input type="text" class="form-control" value="05"></div><div class="col-md-3"><input type="text" class="form-control" value="22"></div><div class="col-md-6"><label>Code CVV</label><p class="mb-0 small">Enter the cvv code of card</p></div><div class="col-md-6"><input class="form-control" type="text"></div><div class="col-md-6"><label>Password</label><p class="mb-0 small">Enter the dynamic password</p></div><div class="col-md-6"><input type="password" class="form-control" value="123"></div>',9),G={class:"col-12 mt-3"},J=e("div",{class:"tab-pane fade",id:"pills-profile",role:"tabpanel","aria-labelledby":"pills-profile-tab"},"...",-1),Q={key:1,class:"thank-you-section mt-5"},U=r('<div class="p-3 mb-4 rounded-lg bg-primary-light"><div class="row align-items-center"><div class="col-12 p-4 text-center"><i class="bi bi-envelope fs-1"></i><p class="fs-4 mb-0 fw-bold">Thank You</p><p class="fs-4 mb-0">For Your Payment</p></div></div></div><div class="mt-5 text-center"><p class="fs-4 mb-0 fw-bold">Video Call starts in</p><p class="fs-2 text-primary">00:52</p><button class="btn btn-primary"> Connect Again </button></div>',2),X=[U];function Z(s,l,p,m,v,_){return t(),a("div",R,[M,s.paymentDone?i("",!0):(t(),a("div",W,[Y,O,e("div",F,[e("div",L,[e("form",j,[e("div",H,[K,e("div",G,[e("div",{class:"btn btn-primary",onClick:l[0]||(l[0]=c=>s.onPayment())},"Pay Now")])])])]),J])])),s.paymentDone?(t(),a("div",Q,X)):i("",!0)])}const ee=d(B,[["render",Z]]),se={},te={class:"mt-3"},ae=e("h5",{class:"mb-3"},"Write a Review",-1),le={class:"p-4 rounded-lg shadow"},oe={class:"px-3 py-2 mb-3 rounded-md bg-primary-light"},ie={class:"row align-items-center"},ne=e("div",{class:"col-md-6"},[e("h6",{class:"mb-0"},"Communication")],-1),ce={class:"col-md-6 text-center"},de={class:"rating fs-3 text-warning"},re={class:"px-3 py-2 mb-4 rounded-md bg-primary-light"},pe={class:"row align-items-center"},me=e("div",{class:"col-md-6"},[e("h6",{class:"mb-0"},"Communication")],-1),ve={class:"col-md-6 text-center"},_e={class:"rating fs-3 text-warning"},be=r('<div><form action><div class="row g-4"><div class="col-md-6"><label class="mb-2">Name</label><input type="text" class="form-control"></div><div class="col-md-6"><label class="mb-2">Email</label><input type="email" class="form-control"></div><div class="col-12"><label class="mb-2">Message</label><textarea class="form-control" cols="20" rows="5"></textarea></div><div class="col-12 mt-3"><div class="btn btn-primary">Pay Now</div></div></div></form></div>',1);function ue(s,l,p,m,v,_){const c=o("star-rating");return t(),a("div",te,[ae,e("div",le,[e("div",oe,[e("div",ie,[ne,e("div",ce,[e("div",de,[n(c,{rating:4,"star-size":20,"read-only":!0,increment:.01,"show-rating":!1},null,8,["increment"])])])])]),e("div",re,[e("div",pe,[me,e("div",ve,[e("div",_e,[n(c,{rating:4,"star-size":20,"read-only":!0,increment:.01,"show-rating":!1},null,8,["increment"])])])])]),be])])}const he=d(se,[["render",ue]]),fe="/build/assets/vid-call-56267b37.png",ye={},$e=e("img",{src:fe,alt:"",class:"img-fluid"},null,-1),ge=[$e];function we(s,l,p,m,v,_){return t(),a("div",null,ge)}const xe=d(ye,[["render",we]]);const Ce=h({components:{AppLayout:C,Navbar:k,ContactDetails:E,PaymentSection:ee,ReviewSection:he,VideoCallSection:xe,Wizard:D,PageHeader:T},data(){return{currentTabIndex:0}},methods:{onChangeCurrentTab(s,l){this.currentTabIndex=s},onTabBeforeChange(){this.currentTabIndex},wizardCompleted(){}}}),f=s=>(N("data-v-8d770672"),s=s(),V(),s),ke={class:"section p-0"},Te={class:"row mx-0 border-bottom border-dark py-5"},De={class:"col-12 text-center py-3"},Ie={class:"fs-2 mb-0"},Pe=f(()=>e("span",{class:"fw-bold"},"Make An Appointment",-1)),Ne=f(()=>e("p",null,"Discover The Best Lawyers Near You",-1)),Ve={class:"container"},Se={class:"row"},qe={class:"col-md-12"},ze={key:0},Ae={key:1},Ee={key:2},Be={key:3},Re={key:4};function Me(s,l,p,m,v,_){const c=o("contact-details"),y=o("payment-section"),$=o("video-call-section"),g=o("review-section"),w=o("Wizard"),x=o("app-layout");return t(),I(x,{title:"shop"},{default:b(()=>[e("div",ke,[e("div",Te,[e("div",De,[e("p",Ie,[P(u(s.__("hello"))+" "+u(s.$page.props.auth.user.name)+" | ",1),Pe]),Ne])]),e("div",Ve,[e("div",Se,[e("div",qe,[n(w,{verticalTabs:"","navigable-tabs":"","scrollable-tabs":"",nextButton:{text:"Continue",icon:"back",hideIcon:!1,hideText:!1},"custom-tabs":[{title:"Information Details"},{title:"Schedule Appointment"},{title:"Make a Payment"},{title:"Start a Video Call"},{title:"Write a Review"}],beforeChange:s.onTabBeforeChange,onChange:s.onChangeCurrentTab,"onComplete:wizard":s.wizardCompleted},{default:b(()=>[s.currentTabIndex===0?(t(),a("div",ze,[n(c)])):i("",!0),s.currentTabIndex===1?(t(),a("div",Ae," Schedule Appointment ")):i("",!0),s.currentTabIndex===2?(t(),a("div",Ee,[n(y)])):i("",!0),s.currentTabIndex===3?(t(),a("div",Be,[n($)])):i("",!0),s.currentTabIndex===4?(t(),a("div",Re,[n(g)])):i("",!0)]),_:1},8,["beforeChange","onChange","onComplete:wizard"])])])])])]),_:1})}const Fe=d(Ce,[["render",Me],["__scopeId","data-v-8d770672"]]);export{Fe as default};