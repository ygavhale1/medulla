/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'topglow',
            type:'image',
            rect:['auto','-0.5%','49.5%','24.7%','25.3%','auto'],
            fill:["rgba(0,0,0,0)",'assets/topglow.png','0%','0%','100.02%','auto']
         },
         {
            id:'tabblack',
            type:'image',
            rect:['auto','18.2%','101.4%','13.3%','-8.5%','auto'],
            fill:["rgba(0,0,0,0)",'assets/tabblack.png','50%','50%','1038.07px','auto']
         },
         {
            id:'exam',
            type:'rect',
            rect:['auto','19.6%','auto','auto','54.6%','auto'],
            cursor:['pointer']
         },
         {
            id:'case',
            type:'rect',
            rect:['auto','19.6%','auto','auto','68.7%','auto']
         },
         {
            id:'investi',
            type:'rect',
            rect:['auto','19.6%','auto','auto','40.6%','auto']
         },
         {
            id:'inter',
            type:'rect',
            rect:['auto','19.7%','auto','auto','29.9%','auto']
         },
         {
            id:'diagno',
            type:'rect',
            rect:['auto','19.7%','auto','auto','19%','auto']
         },
         {
            id:'exam_s',
            type:'rect',
            rect:['29.9%','36.2%','auto','auto','auto','auto'],
            clip:['rect(0px 771.06665039063pxpx 396pxpx 0px)'],
            cursor:['pointer']
         },
         {
            id:'immint_s',
            type:'rect',
            rect:['34.9%','36.4%','auto','auto','auto','auto'],
            clip:['rect(0px 747pxpx 396pxpx 0px)'],
            cursor:['pointer']
         },
         {
            id:'mcq_s',
            type:'rect',
            rect:['39.8%','36.4%','auto','auto','auto','auto'],
            clip:['rect(0px 633pxpx 396pxpx 0px)'],
            cursor:['pointer']
         },
         {
            id:'broad_S',
            type:'rect',
            rect:['44.9%','36.4%','auto','auto','auto','auto'],
            clip:['rect(0px 585pxpx 396pxpx 0px)'],
            cursor:['pointer']
         },
         {
            id:'logo12',
            type:'rect',
            rect:['auto','4.2%','auto','auto','33%','auto']
         },
         {
            id:'logo2',
            type:'rect',
            rect:['auto','auto','auto','auto','1.5%','3%']
         },
         {
            id:'casebg',
            type:'image',
            rect:['auto','36.2%','48.4%','51.5%','23.3%','auto'],
            fill:["rgba(0,0,0,0)",'assets/casebg.png','0px','0px']
         },
         {
            id:'postim',
            type:'image',
            rect:['auto','36.4%','728px','396px','20.5%','auto'],
            fill:["rgba(0,0,0,0)",'assets/postim.png','0px','0px']
         },
         {
            id:'xray',
            type:'image',
            rect:['auto','36.2%','700px','396px','16.6%','auto'],
            clip:['rect(0px 700pxpx 396pxpx 0px)'],
            fill:["rgba(0,0,0,0)",'assets/xray.png','0px','0px']
         }],
         symbolInstances: [
         {
            id:'exam_s',
            symbolName:'exam_s'
         },
         {
            id:'inter',
            symbolName:'inter'
         },
         {
            id:'mcq_s',
            symbolName:'mcq_s'
         },
         {
            id:'logo2',
            symbolName:'logo2'
         },
         {
            id:'case',
            symbolName:'case'
         },
         {
            id:'logo12',
            symbolName:'logo1'
         },
         {
            id:'broad_S',
            symbolName:'broad_S'
         },
         {
            id:'immint_s',
            symbolName:'immint_s'
         },
         {
            id:'diagno',
            symbolName:'diagno'
         },
         {
            id:'investi',
            symbolName:'investi'
         },
         {
            id:'exam',
            symbolName:'exam'
         }
         ]
      },
   states: {
      "Base State": {
         "${_xray}": [
            ["style", "top", '-2.77%'],
            ["transform", "scaleY", '0'],
            ["style", "clip", [0,700,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["transform", "scaleX", '0'],
            ["style", "right", '16.56%'],
            ["style", "left", 'auto'],
            ["style", "opacity", '0']
         ],
         "${_exam}": [
            ["style", "top", '19.59%'],
            ["style", "right", '54.74%'],
            ["style", "left", 'auto'],
            ["style", "cursor", 'pointer']
         ],
         "${_Text2}": [
            ["style", "text-align", '']
         ],
         "${_casebg}": [
            ["style", "top", '-1.49%'],
            ["style", "height", '51.46%'],
            ["transform", "scaleY", '0'],
            ["style", "right", '48.42%'],
            ["transform", "scaleX", '0'],
            ["style", "opacity", '0'],
            ["style", "left", 'auto'],
            ["style", "width", '48.35%']
         ],
         "${_investi}": [
            ["style", "left", 'auto'],
            ["style", "right", '40.58%']
         ],
         "${_mcq_s}": [
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "scaleX", '0'],
            ["style", "opacity", '0'],
            ["style", "cursor", 'pointer'],
            ["style", "top", '-1.47%'],
            ["transform", "scaleY", '0'],
            ["style", "left", '49.33%'],
            ["style", "clip", [0,73,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["style", "right", 'auto']
         ],
         "${_topglow}": [
            ["style", "top", '-0.52%'],
            ["style", "height", '24.68%'],
            ["style", "right", '25.3%'],
            ["style", "left", 'auto'],
            ["style", "background-size", [100.02,'auto'], {valueTemplate:'@@0@@% @@1@@'} ]
         ],
         "${_case}": [
            ["style", "left", 'auto'],
            ["style", "right", '68.69%']
         ],
         "${_tabblack}": [
            ["style", "top", '18.18%'],
            ["style", "bottom", 'auto'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "right", '-8.46%'],
            ["style", "left", 'auto'],
            ["style", "background-size", [1038.07,'auto'], {valueTemplate:'@@0@@px @@1@@'} ]
         ],
         "${_broad_S}": [
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "scaleX", '0'],
            ["style", "opacity", '0.0234375'],
            ["style", "cursor", 'pointer'],
            ["style", "top", '-1.3%'],
            ["transform", "scaleY", '0'],
            ["style", "left", '48.73%'],
            ["style", "clip", [0,77,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["style", "right", 'auto']
         ],
         "${_exam_s}": [
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "scaleX", '0'],
            ["style", "opacity", '0'],
            ["style", "left", '51.98%'],
            ["style", "top", '-1.56%'],
            ["transform", "scaleY", '0'],
            ["style", "right", 'auto'],
            ["style", "clip", [0,85,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["style", "cursor", 'pointer']
         ],
         "${_inter}": [
            ["style", "left", 'auto'],
            ["style", "right", '29.87%']
         ],
         "${_diagno}": [
            ["style", "left", 'auto'],
            ["style", "right", '18.97%']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(3,16,32,1.00)'],
            ["style", "width", '100%'],
            ["style", "height", '100%'],
            ["style", "overflow", 'hidden']
         ],
         "${_postim}": [
            ["style", "top", '-2.64%'],
            ["transform", "scaleY", '0'],
            ["transform", "scaleX", '0'],
            ["style", "right", '20.45%'],
            ["style", "left", 'auto'],
            ["style", "opacity", '0']
         ],
         "${_logo2}": [
            ["style", "top", 'auto'],
            ["style", "right", '1.47%'],
            ["style", "left", 'auto'],
            ["style", "bottom", '2.99%']
         ],
         "${_immint_s}": [
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "scaleX", '0'],
            ["style", "right", 'auto'],
            ["style", "left", '51.66%'],
            ["style", "top", '-1.3%'],
            ["transform", "scaleY", '0'],
            ["style", "cursor", 'pointer'],
            ["style", "clip", [0,89,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["style", "opacity", '0']
         ],
         "${_logo12}": [
            ["style", "left", 'auto'],
            ["style", "right", '33.02%']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 13000,
         autoPlay: true,
         labels: {
            "examtabin": 2000,
            "examtabout": 3000,
            "broadin": 4000,
            "broadout": 4750,
            "algoin": 5235,
            "algoout": 5826,
            "mcqin": 6500,
            "mcqout": 7202,
            "immintin": 7500,
            "immintout": 8000,
            "examclickin": 8500,
            "examclickout": 9000,
            "itallendshere": 9311,
            "casein": 9750,
            "caseout": 10250,
            "investigation": 11296,
            "postimin": 12500
         },
         timeline: [
            { id: "eid3210", tween: [ "transform", "${_mcq_s}", "scaleY", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3530", tween: [ "transform", "${_immint_s}", "scaleY", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid2940", tween: [ "style", "${_xray}", "top", '36.23%', { fromValue: '-2.77%'}], position: 11296, duration: 704, easing: "easeOutBounce" },
            { id: "eid2939", tween: [ "transform", "${_postim}", "scaleY", '1', { fromValue: '0'}], position: 11296, duration: 704 },
            { id: "eid2938", tween: [ "transform", "${_xray}", "scaleY", '1', { fromValue: '0'}], position: 11296, duration: 704 },
            { id: "eid2746", tween: [ "style", "${_casebg}", "right", '23.32%', { fromValue: '48.42%'}], position: 9750, duration: 500 },
            { id: "eid3576", tween: [ "transform", "${_exam_s}", "scaleY", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3578", tween: [ "style", "${_exam_s}", "top", '36.36%', { fromValue: '-1.56%'}], position: 2000, duration: 1000, easing: "easeOutBounce" },
            { id: "eid3301", tween: [ "style", "${_mcq_s}", "clip", [0,73,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,73,396,0]}], position: 2000, duration: 0 },
            { id: "eid3651", tween: [ "style", "${_mcq_s}", "clip", [0,73,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,73,396,0]}], position: 3000, duration: 0 },
            { id: "eid3671", tween: [ "style", "${_mcq_s}", "clip", [0,633,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,73,396,0]}], position: 6500, duration: 0 },
            { id: "eid3672", tween: [ "style", "${_mcq_s}", "clip", [0,633,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,633,396,0]}], position: 7202, duration: 0 },
            { id: "eid3510", tween: [ "style", "${_mcq_s}", "clip", [0,104,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,633,396,0]}], position: 7500, duration: 500 },
            { id: "eid3391", tween: [ "style", "${_broad_S}", "top", '36.36%', { fromValue: '-1.3%'}], position: 2000, duration: 1000, easing: "easeOutBounce" },
            { id: "eid2745", tween: [ "style", "${_casebg}", "top", '36.21%', { fromValue: '-1.49%'}], position: 9750, duration: 500, easing: "easeOutBounce" },
            { id: "eid3207", tween: [ "style", "${_mcq_s}", "top", '36.36%', { fromValue: '-1.47%'}], position: 2000, duration: 1000, easing: "easeOutBounce" },
            { id: "eid3529", tween: [ "transform", "${_immint_s}", "scaleX", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3389", tween: [ "transform", "${_broad_S}", "scaleX", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid2903", tween: [ "style", "${_xray}", "opacity", '1', { fromValue: '0.000000'}], position: 11296, duration: 704 },
            { id: "eid3532", tween: [ "style", "${_immint_s}", "top", '36.36%', { fromValue: '-1.3%'}], position: 2000, duration: 1000, easing: "easeOutBounce" },
            { id: "eid3579", tween: [ "style", "${_exam_s}", "opacity", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3611", tween: [ "style", "${_exam_s}", "opacity", '0', { fromValue: '1'}], position: 9311, duration: 189 },
            { id: "eid2743", tween: [ "transform", "${_casebg}", "scaleX", '1.11', { fromValue: '0'}], position: 9750, duration: 500 },
            { id: "eid2814", tween: [ "transform", "${_casebg}", "scaleX", '1.11', { fromValue: '1.11'}], position: 10500, duration: 0, easing: "easeOutBounce" },
            { id: "eid3575", tween: [ "transform", "${_exam_s}", "scaleX", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid2936", tween: [ "transform", "${_xray}", "scaleX", '1', { fromValue: '0'}], position: 11296, duration: 704 },
            { id: "eid3008", tween: [ "style", "${_xray}", "right", '-32.85%', { fromValue: '16.56%'}], position: 12500, duration: 500 },
            { id: "eid3394", tween: [ "style", "${_broad_S}", "opacity", '1', { fromValue: '0.023437999188899994'}], position: 2000, duration: 1000 },
            { id: "eid3410", tween: [ "style", "${_broad_S}", "opacity", '0', { fromValue: '1'}], position: 4750, duration: 250 },
            { id: "eid3412", tween: [ "style", "${_broad_S}", "opacity", '1', { fromValue: '1'}], position: 5235, duration: 0 },
            { id: "eid3608", tween: [ "style", "${_broad_S}", "opacity", '0', { fromValue: '1'}], position: 9311, duration: 189 },
            { id: "eid3593", tween: [ "style", "${_immint_s}", "left", '23.53%', { fromValue: '51.66%'}], position: 2000, duration: 1000 },
            { id: "eid3594", tween: [ "style", "${_immint_s}", "left", '72.74%', { fromValue: '23.53%'}], position: 8500, duration: 0 },
            { id: "eid2865", tween: [ "style", "${_postim}", "opacity", '1', { fromValue: '0.000000'}], position: 11296, duration: 704 },
            { id: "eid3587", tween: [ "style", "${_broad_S}", "left", '33.57%', { fromValue: '48.73%'}], position: 2000, duration: 1000 },
            { id: "eid3656", tween: [ "style", "${_broad_S}", "left", '79.28%', { fromValue: '33.57%'}], position: 6500, duration: 0 },
            { id: "eid3581", tween: [ "style", "${_immint_s}", "opacity", '1', { fromValue: '0'}], position: 2000, duration: 1000, easing: "easeOutBounce" },
            { id: "eid3610", tween: [ "style", "${_immint_s}", "opacity", '0', { fromValue: '1'}], position: 9311, duration: 189 },
            { id: "eid30", tween: [ "style", "${_exam}", "right", '54.74%', { fromValue: '54.74%'}], position: 0, duration: 0 },
            { id: "eid3209", tween: [ "transform", "${_mcq_s}", "scaleX", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid2941", tween: [ "style", "${_postim}", "top", '36.36%', { fromValue: '-2.64%'}], position: 11296, duration: 704, easing: "easeOutBounce" },
            { id: "eid3296", tween: [ "style", "${_mcq_s}", "opacity", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3599", tween: [ "style", "${_mcq_s}", "opacity", '1', { fromValue: '1'}], position: 7202, duration: 0 },
            { id: "eid3600", tween: [ "style", "${_mcq_s}", "opacity", '1', { fromValue: '1'}], position: 7500, duration: 0 },
            { id: "eid3609", tween: [ "style", "${_mcq_s}", "opacity", '0', { fromValue: '1'}], position: 9311, duration: 189 },
            { id: "eid3390", tween: [ "transform", "${_broad_S}", "scaleY", '1', { fromValue: '0'}], position: 2000, duration: 1000 },
            { id: "eid3536", tween: [ "style", "${_immint_s}", "clip", [0,89,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,89,396,0]}], position: 3000, duration: 0, easing: "easeOutBounce" },
            { id: "eid3538", tween: [ "style", "${_immint_s}", "clip", [0,659,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,89,396,0]}], position: 7500, duration: 500, easing: "easeOutBounce" },
            { id: "eid3544", tween: [ "style", "${_immint_s}", "clip", [0,96,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,659,396,0]}], position: 8500, duration: 0 },
            { id: "eid3007", tween: [ "style", "${_xray}", "clip", [0,76,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,700,396,0]}], position: 12500, duration: 500 },
            { id: "eid3405", tween: [ "style", "${_broad_S}", "clip", [0,77,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,77,396,0]}], position: 3000, duration: 0, easing: "easeOutBounce" },
            { id: "eid3407", tween: [ "style", "${_broad_S}", "clip", [0,588,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,77,396,0]}], position: 4000, duration: 750 },
            { id: "eid3653", tween: [ "style", "${_broad_S}", "clip", [0,77,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,588,396,0]}], position: 6500, duration: 0 },
            { id: "eid3437", tween: [ "style", "${_broad_S}", "clip", [0,79,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,77,396,0]}], position: 7202, duration: 798 },
            { id: "eid2937", tween: [ "transform", "${_postim}", "scaleX", '1', { fromValue: '0'}], position: 11296, duration: 704 },
            { id: "eid3596", tween: [ "style", "${_exam_s}", "left", '18.57%', { fromValue: '51.98%'}], position: 2000, duration: 1000 },
            { id: "eid3597", tween: [ "style", "${_exam_s}", "left", '18.57%', { fromValue: '29.91%'}], position: 8500, duration: 0, easing: "easeOutBounce" },
            { id: "eid3591", tween: [ "style", "${_mcq_s}", "left", '28.47%', { fromValue: '49.33%'}], position: 2000, duration: 1000 },
            { id: "eid3592", tween: [ "style", "${_mcq_s}", "left", '77.01%', { fromValue: '28.47%'}], position: 7500, duration: 500 },
            { id: "eid3574", tween: [ "style", "${_exam_s}", "clip", [0,85,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,85,396,0]}], position: 3000, duration: 0 },
            { id: "eid3584", tween: [ "style", "${_exam_s}", "clip", [0,680,396,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,85,396,0]}], position: 8500, duration: 0 },
            { id: "eid2744", tween: [ "transform", "${_casebg}", "scaleY", '1', { fromValue: '0'}], position: 9750, duration: 500 },
            { id: "eid1403", tween: [ "style", "${_casebg}", "opacity", '1', { fromValue: '0.000000'}], position: 9750, duration: 500 },
            { id: "eid1404", tween: [ "style", "${_casebg}", "opacity", '0', { fromValue: '1'}], position: 10250, duration: 500 }         ]
      }
   }
},
"exam": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      id: 'examglow_icon2',
      type: 'image',
      rect: ['-6px','-5px','115px','107px','auto','auto'],
      fill: ['rgba(0,0,0,0)','assets/examglow_icon.png','0px','0px']
   },
   {
      id: 'exam_icon',
      type: 'image',
      rect: ['0.2%','-0.1%','100%','100%','auto','auto'],
      fill: ['rgba(0,0,0,0)','assets/exam_icon.png','0px','0px','103px','99px']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_examglow_icon2}": [
            ["style", "top", '-5px'],
            ["style", "opacity", '0'],
            ["style", "left", '-6px']
         ],
         "${symbolSelector}": [
            ["style", "height", '99.016670227051px'],
            ["style", "width", '123.93333435059px']
         ],
         "${_exam_icon}": [
            ["style", "left", '0%'],
            ["style", "top", '0.01%']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1000,
         autoPlay: true,
         labels: {
            "in": 0,
            "out": 1000
         },
         timeline: [
            { id: "eid22", tween: [ "style", "${_examglow_icon2}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 1000 }         ]
      }
   }
},
"case": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['-13px','-12px','138px','113px','auto','auto'],
      id: 'cbglow_icon',
      opacity: 0,
      type: 'image',
      fill: ['rgba(0,0,0,0)','assets/cbglow_icon.png','0px','0px']
   },
   {
      id: 'cb_icon',
      type: 'image',
      rect: ['0px','0px','110px','91px','auto','auto'],
      fill: ['rgba(0,0,0,0)','assets/cb_icon.png','0px','0px']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_cbglow_icon}": [
            ["style", "top", '-12px'],
            ["style", "opacity", '0'],
            ["style", "left", '-13px']
         ],
         "${_cb_icon}": [
            ["style", "left", '0px'],
            ["style", "top", '0px']
         ],
         "${symbolSelector}": [
            ["style", "height", '91px'],
            ["style", "width", '110px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1000,
         autoPlay: true,
         labels: {
            "casein": 0,
            "caseout": 1000
         },
         timeline: [
            { id: "eid29", tween: [ "style", "${_cbglow_icon}", "opacity", '1', { fromValue: '0'}], position: 0, duration: 1000 }         ]
      }
   }
},
"investi": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['auto','-12%','178px','109px','-5.7%','auto'],
      id: 'investglow_icon2',
      opacity: 0,
      type: 'image',
      fill: ['rgba(0,0,0,0)','assets/investglow_icon.png','0px','0px']
   },
   {
      id: 'invest_icon',
      type: 'image',
      rect: ['auto','0%','159px','92px','0%','auto'],
      fill: ['rgba(0,0,0,0)','assets/invest_icon.png','0px','0px']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_invest_icon}": [
            ["style", "top", '0%'],
            ["style", "right", '0%'],
            ["style", "left", 'auto']
         ],
         "${_investglow_icon2}": [
            ["style", "top", '-11.96%'],
            ["style", "opacity", '0'],
            ["style", "left", 'auto'],
            ["style", "right", '-5.66%']
         ],
         "${symbolSelector}": [
            ["style", "height", '92px'],
            ["style", "width", '159px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1000,
         autoPlay: true,
         labels: {
            "invin": 0,
            "invout": 1000
         },
         timeline: [
            { id: "eid32", tween: [ "style", "${_investglow_icon2}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 1000 }         ]
      }
   }
},
"inter": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['auto','-11px','106px','108px','-9px','auto'],
      id: 'interglow_icon2',
      opacity: 0,
      type: 'image',
      fill: ['rgba(0,0,0,0)','assets/interglow_icon.png','0px','0px']
   },
   {
      id: 'inter_icon',
      type: 'image',
      rect: ['auto','0%','88px','91px','0%','auto'],
      fill: ['rgba(0,0,0,0)','assets/inter_icon.png','0px','0px']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_inter_icon}": [
            ["style", "top", '0.02%'],
            ["style", "right", '0.02%'],
            ["style", "left", 'auto']
         ],
         "${_interglow_icon2}": [
            ["style", "top", '-11px'],
            ["style", "opacity", '0'],
            ["style", "left", 'auto'],
            ["style", "right", '-9px']
         ],
         "${symbolSelector}": [
            ["style", "height", '91px'],
            ["style", "width", '88px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1000,
         autoPlay: true,
         labels: {
            "interin": 0,
            "interout": 1000
         },
         timeline: [
            { id: "eid34", tween: [ "style", "${_interglow_icon2}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 1000 }         ]
      }
   }
},
"diagno": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['auto','-12%','85px','109px','-15.1%','auto'],
      id: 'diagglow_icon',
      opacity: 0,
      type: 'image',
      fill: ['rgba(0,0,0,0)','assets/diagglow_icon.png','0px','0px']
   },
   {
      id: 'diag_icon',
      type: 'image',
      rect: ['auto','0%','66px','92px','0%','auto'],
      fill: ['rgba(0,0,0,0)','assets/diag_icon.png','0px','0px']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${symbolSelector}": [
            ["style", "height", '92px'],
            ["style", "width", '66px']
         ],
         "${_diagglow_icon}": [
            ["style", "top", '-11.96%'],
            ["style", "right", '-15.15%'],
            ["style", "left", 'auto'],
            ["style", "opacity", '0']
         ],
         "${_diag_icon}": [
            ["style", "top", '0.02%'],
            ["style", "right", '0.02%'],
            ["style", "left", 'auto']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1000,
         autoPlay: true,
         labels: {
            "diagin": 0,
            "diagout": 1000
         },
         timeline: [
            { id: "eid36", tween: [ "style", "${_diagglow_icon}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 1000 }         ]
      }
   }
},
"logo1": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      font: ['Arial, Helvetica, sans-serif',53,'rgba(255,255,255,1.00)','800','none','normal'],
      id: 'Text',
      text: 'Pulmo',
      type: 'text',
      rect: ['auto','0.4%','48%','87.7%','52%','auto']
   },
   {
      font: ['Arial, Helvetica, sans-serif',50,'rgba(255,255,255,1.00)','400','none','normal'],
      id: 'TextCopy',
      text: 'SCOPE',
      type: 'text',
      rect: ['auto','0%','53.7%','84.9%','0%','auto']
   },
   {
      font: ['Arial, Helvetica, sans-serif',13,'rgba(255,255,255,1)','400','none','normal'],
      type: 'text',
      id: 'Text2',
      text: 'Pulmonary Synopses and Cases for Physician Education',
      align: 'center',
      rect: ['auto','80.6%','96.3%','19.2%','3%','auto']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Text2}": [
            ["style", "line-height", '14px'],
            ["style", "letter-spacing", '0px'],
            ["style", "font-weight", '400'],
            ["style", "left", 'auto'],
            ["style", "font-size", '13px'],
            ["style", "top", '80.83%'],
            ["style", "text-align", 'center'],
            ["style", "height", '19.19%'],
            ["style", "right", '3.03%'],
            ["style", "width", '96.3%']
         ],
         "${_TextCopy}": [
            ["style", "line-height", '65px'],
            ["style", "letter-spacing", '0px'],
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "font-weight", '400'],
            ["style", "left", 'auto'],
            ["style", "font-size", '50px'],
            ["style", "top", '0.02%'],
            ["style", "width", '53.69%'],
            ["style", "word-spacing", '0px'],
            ["style", "font-style", 'normal'],
            ["style", "height", '84.94%'],
            ["style", "text-decoration", 'none'],
            ["style", "right", '-0.05%']
         ],
         "${_Text}": [
            ["style", "letter-spacing", '0px'],
            ["style", "bottom", 'auto'],
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "font-weight", '800'],
            ["style", "left", 'auto'],
            ["style", "font-size", '53px'],
            ["style", "top", '0.02%'],
            ["style", "height", '87.68%'],
            ["style", "text-decoration", 'none'],
            ["style", "font-style", 'normal'],
            ["style", "right", '51.98%'],
            ["style", "word-spacing", '0px'],
            ["style", "width", '48.03%']
         ],
         "${symbolSelector}": [
            ["style", "height", '72.983333587646px'],
            ["style", "width", '343.73333740234px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
},
"logo2": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      id: 'logochest',
      type: 'image',
      rect: ['auto','auto','124px','20px','0.3%','27.2%'],
      fill: ['rgba(0,0,0,0)','assets/logochest.png','0px','0px']
   },
   {
      type: 'text',
      rect: ['auto','auto','122px','auto','0.3%','73.5%'],
      id: 'Text3',
      text: 'AMERICAN COLLEGE OF',
      align: 'center',
      font: ['Times New Roman, Times, serif',8,'rgba(255,255,255,1)','800','none','normal']
   },
   {
      type: 'text',
      rect: ['auto','auto','122px','auto','0.3%','0.2%'],
      id: 'Text3Copy',
      text: 'PHYSICIANS',
      align: 'center',
      font: ['Times New Roman, Times, serif',8,'rgba(255,255,255,1)','800','none','normal']
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Text3}": [
            ["style", "letter-spacing", '1.5px'],
            ["style", "bottom", '72.5%'],
            ["style", "right", '0.58%'],
            ["style", "left", 'auto'],
            ["style", "font-size", '8px'],
            ["style", "top", 'auto'],
            ["style", "text-align", 'center'],
            ["style", "font-family", 'Times New Roman, Times, serif'],
            ["style", "width", '122px']
         ],
         "${symbolSelector}": [
            ["style", "height", '39.950012207031px'],
            ["style", "width", '123.93333435059px']
         ],
         "${_Text3Copy}": [
            ["style", "letter-spacing", '8px'],
            ["style", "bottom", '0.01%'],
            ["style", "right", '0.58%'],
            ["style", "left", 'auto'],
            ["style", "width", '122px'],
            ["style", "top", 'auto'],
            ["style", "text-align", 'center'],
            ["style", "font-family", 'Times New Roman, Times, serif'],
            ["style", "font-size", '8px']
         ],
         "${_logochest}": [
            ["style", "top", 'auto'],
            ["style", "bottom", '27.57%'],
            ["style", "height", '19.917857306344px'],
            ["style", "right", '0%'],
            ["style", "left", 'auto'],
            ["style", "width", '123.93333435059px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
},
"mcq_s": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['0%','0.3%','105.4%','100%','auto','auto'],
      id: 'Rectangle',
      stroke: [0,'rgba(0,0,0,1)','none'],
      type: 'rect',
      fill: ['rgba(69,4,115,1.00)']
   },
   {
      rect: ['20.1%','28.5%','66.7%','5.6%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','500','none','normal'],
      id: 'Text3',
      text: 'What should be the choice of antibiotics in this case?<br>',
      align: 'left',
      type: 'text'
   },
   {
      rect: ['35.1%','41.2%','30%','8.3%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',28,'rgba(255,255,255,1)','500','none','normal'],
      id: 'Text9',
      text: 'Correct Answer',
      align: 'left',
      type: 'text'
   },
   {
      rect: ['26.5%','53%','50.9%','19.2%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',27,'rgba(255,255,255,1)','500','none','normal'],
      id: 'Text4',
      text: 'The Correct Answer is<br>Broad Spectrum',
      align: 'center',
      type: 'text'
   },
   {
      rect: ['-0.8%','40.4%','11.1%','9.1%','auto','auto'],
      transform: [{},['-90deg']],
      font: ['Arial, Helvetica, sans-serif',30,'rgba(255,255,255,1)','500','none','normal'],
      id: 'Text',
      text: 'MCQ',
      align: 'left',
      type: 'text'
   },
   {
      rect: ['38.6%','45.7%','26.2%','6.8%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','500','none','normal'],
      id: 'broad',
      text: 'Broad Spectrum',
      align: 'left',
      type: 'text'
   },
   {
      rect: ['38.4%','59.3%','26.4%','9.6%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','500','none','normal'],
      id: 'narrow',
      text: 'Narrow Spectrum',
      align: 'left',
      type: 'text'
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_broad}": [
            ["style", "top", '45.71%'],
            ["style", "height", '6.82%'],
            ["style", "opacity", '1'],
            ["style", "left", '38.49%'],
            ["style", "width", '26.23%']
         ],
         "${_Text3}": [
            ["style", "top", '28.54%'],
            ["style", "width", '66.67%'],
            ["style", "height", '5.56%'],
            ["style", "font-weight", '500'],
            ["style", "left", '20.06%'],
            ["style", "font-size", '18px']
         ],
         "${_Text4}": [
            ["style", "top", '53.03%'],
            ["style", "text-align", 'center'],
            ["style", "font-size", '27px'],
            ["style", "height", '19.19%'],
            ["style", "opacity", '0'],
            ["style", "left", '26.54%'],
            ["style", "width", '50.87%']
         ],
         "${_Text}": [
            ["style", "-webkit-transform-origin", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "top", '40.4%'],
            ["style", "width", '11.06%'],
            ["transform", "rotateZ", '-90deg'],
            ["style", "height", '9.09%'],
            ["style", "font-weight", '500'],
            ["style", "left", '-0.79%'],
            ["style", "font-size", '30px']
         ],
         "${symbolSelector}": [
            ["style", "height", '396px'],
            ["style", "width", '633px']
         ],
         "${_narrow}": [
            ["style", "top", '59.34%'],
            ["style", "width", '26.39%'],
            ["style", "height", '9.6%'],
            ["style", "opacity", '1'],
            ["style", "left", '38.39%'],
            ["style", "font-size", '18px']
         ],
         "${_Rectangle}": [
            ["style", "top", '0%'],
            ["color", "background-color", 'rgba(67,4,113,1.00)'],
            ["style", "right", 'auto'],
            ["style", "left", '0%'],
            ["style", "width", '100%']
         ],
         "${_Text9}": [
            ["style", "top", '41.24%'],
            ["style", "width", '30.02%'],
            ["style", "height", '8.33%'],
            ["style", "opacity", '0'],
            ["style", "left", '35.07%'],
            ["style", "font-size", '28px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 1703,
         autoPlay: true,
         labels: {
            "broadin": 0,
            "narrowin": 1000
         },
         timeline: [
            { id: "eid3667", tween: [ "style", "${_Text4}", "opacity", '1', { fromValue: '0.000000'}], position: 1186, duration: 314 },
            { id: "eid3668", tween: [ "style", "${_Text4}", "opacity", '0', { fromValue: '1'}], position: 1500, duration: 203 },
            { id: "eid3658", tween: [ "style", "${_narrow}", "opacity", '0', { fromValue: '1'}], position: 0, duration: 105 },
            { id: "eid3665", tween: [ "style", "${_narrow}", "opacity", '0', { fromValue: '1'}], position: 1000, duration: 110 },
            { id: "eid3650", tween: [ "style", "${_broad}", "opacity", '1', { fromValue: '1'}], position: 0, duration: 0 },
            { id: "eid3662", tween: [ "style", "${_broad}", "opacity", '0', { fromValue: '1'}], position: 105, duration: 0 },
            { id: "eid3664", tween: [ "style", "${_broad}", "opacity", '0', { fromValue: '1'}], position: 1000, duration: 110 },
            { id: "eid3648", tween: [ "style", "${_Text9}", "opacity", '1', { fromValue: '0.000000'}], position: 276, duration: 311 },
            { id: "eid3659", tween: [ "style", "${_Text9}", "opacity", '0', { fromValue: '1'}], position: 587, duration: 203 }         ]
      }
   }
},
"broad_S": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['0%','0%','100%','100%','auto','auto'],
      id: 'Rectangle2',
      stroke: [0,'rgb(0, 0, 0)','none'],
      type: 'rect',
      fill: ['rgba(39,2,81,1.00)']
   },
   {
      rect: ['-155px','177px','67.7%','10.6%','auto','auto'],
      transform: [{},['-90deg']],
      font: ['Arial, Helvetica, sans-serif',20,'rgba(255,255,255,1)','700','none','normal'],
      id: 'Text2',
      text: 'Broad vs Narrow Spectrum Antibiotics',
      align: 'center',
      type: 'text'
   },
   {
      rect: ['16.1%','20.2%','71.5%','68.2%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','300','none','normal'],
      id: 'Text7',
      text: 'There is an ongoing debate broad or narrow spectrum antibiotic in pneumonia, however given the fact that this patient was being treated for pneumonia before being rushed to the ED and the clinical importance of inadequate antimicrobial treatment as a risk factor for hospital mortality in the ICU setting we decided to go for broad spectrum antibiotics. (Algorithm1)<br>',
      align: 'left',
      type: 'text'
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Rectangle2}": [
            ["color", "background-color", 'rgba(39,2,81,1.00)'],
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "top", '0%'],
            ["style", "right", 'auto'],
            ["style", "left", '0%'],
            ["style", "width", '100%']
         ],
         "${symbolSelector}": [
            ["style", "height", '396px'],
            ["style", "width", '585px']
         ],
         "${_Text2}": [
            ["style", "line-height", '23px'],
            ["style", "letter-spacing", '0px'],
            ["transform", "rotateZ", '-90deg'],
            ["style", "font-weight", '700'],
            ["style", "left", '-155px'],
            ["style", "width", '67.7%'],
            ["style", "top", '177px'],
            ["style", "text-align", 'center'],
            ["style", "text-indent", '0px'],
            ["style", "height", '10.61%'],
            ["style", "word-spacing", '0px'],
            ["style", "font-size", '20px']
         ],
         "${_Text7}": [
            ["style", "top", '20.2%'],
            ["style", "font-size", '18px'],
            ["style", "height", '68.18%'],
            ["style", "font-weight", '300'],
            ["style", "left", '16.13%'],
            ["style", "width", '71.46%']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
},
"immint_s": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['0%','0%','100%','100%','auto','auto'],
      id: 'Rectangle',
      stroke: [0,'rgba(0,0,0,1)','none'],
      type: 'rect',
      fill: ['rgba(87,10,134,1.00)']
   },
   {
      rect: ['-22.4%','46.5%','53%','7.1%','auto','auto'],
      transform: [{},['-90deg']],
      font: ['Arial, Helvetica, sans-serif',24,'rgba(255,255,255,1.00)','500','none',''],
      id: 'Text',
      text: 'Immediate Intervention',
      align: 'center',
      type: 'text'
   },
   {
      rect: ['13.4%','19.1%','64.5%','74.2%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','300','none','normal'],
      id: 'Text6',
      text: 'The decision was taken to immediately intubate the patient and make her comfortable on a ventilator. <br><br>It was a difficult maneuver of endotracheal tube insertion but we were able to manage this. <br><br>Thus the ventilator support was initiated with broad spectrum antibiotic along with I.V. fluids and ionotropic support.<br>',
      align: 'left',
      type: 'text'
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Text6}": [
            ["style", "top", '19.14%'],
            ["style", "font-size", '18px'],
            ["style", "height", '74.24%'],
            ["style", "font-weight", '300'],
            ["style", "left", '13.38%'],
            ["style", "width", '64.53%']
         ],
         "${_Text}": [
            ["style", "top", '46.46%'],
            ["style", "height", '7.07%'],
            ["style", "text-align", 'center'],
            ["transform", "rotateZ", '-90deg'],
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "font-weight", '500'],
            ["style", "left", '-22.42%'],
            ["style", "width", '53.02%']
         ],
         "${symbolSelector}": [
            ["style", "height", '396px'],
            ["style", "width", '747px']
         ],
         "${_Rectangle}": [
            ["color", "background-color", 'rgba(87,10,134,1.00)'],
            ["style", "right", 'auto'],
            ["style", "left", '0%'],
            ["style", "top", '0%']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
},
"exam_s": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
   dom: [
   {
      rect: ['0%','0%','100%','100%','auto','auto'],
      type: 'rect',
      id: 'Rectangle2',
      stroke: [0,'rgb(0, 0, 0)','none'],
      clip: ['rect(0px 771.00008138021pxpx 396pxpx 0px)'],
      fill: ['rgba(124,59,152,1.00)']
   },
   {
      rect: ['-168px','185px','396px','auto','auto','auto'],
      transform: [{},['-90deg']],
      font: ['Arial, Helvetica, sans-serif',22,'rgba(255,255,255,1)','500','none','normal'],
      id: 'Text2',
      text: 'Examination &amp; Findings',
      align: 'center',
      type: 'text'
   },
   {
      rect: ['13.5%','22.5%','64.6%','70.2%','auto','auto'],
      font: ['Arial, Helvetica, sans-serif',18,'rgba(255,255,255,1)','300','none','normal'],
      id: 'Text5',
      text: '\tA 62-year-old woman was rushed in the ED of Lilavati hospital (Mumbai, India) in a state of collapse. <br>\t<br>\tPrevious history <br>\tAt the primary level, she had a history of severe breathlessness and fever. Her Chest X-ray, revealed pneumonia and her treatment was started accordingly. However, shortly after initiation of the treatment, she collapsed and was rushed to the hospital under my care.  <br>',
      align: 'left',
      type: 'text'
   }],
   symbolInstances: [
   ]
   },
   states: {
      "Base State": {
         "${_Rectangle2}": [
            ["style", "-webkit-transform-origin", [0,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [0,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["color", "background-color", 'rgba(124,59,152,1.00)'],
            ["transform", "scaleY", '1'],
            ["style", "left", '0%'],
            ["transform", "scaleX", '1'],
            ["style", "right", 'auto'],
            ["style", "clip", [0,771.00008138021,396,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
            ["style", "top", '0%']
         ],
         "${symbolSelector}": [
            ["style", "height", '396px'],
            ["style", "width", '771.06665039063px']
         ],
         "${_Text2}": [
            ["style", "top", '185px'],
            ["transform", "rotateZ", '-90deg'],
            ["style", "font-size", '22px'],
            ["style", "font-weight", '500'],
            ["style", "left", '-168.5px'],
            ["style", "width", '396px']
         ],
         "${_Text5}": [
            ["style", "top", '22.49%'],
            ["style", "text-align", 'left'],
            ["style", "width", '64.59%'],
            ["style", "height", '70.2%'],
            ["style", "font-weight", '300'],
            ["style", "left", '13.53%'],
            ["style", "font-size", '18px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-10378066");
