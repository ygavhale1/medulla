/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindElementAction(compId, symbolName, "document", "compositionReady", function(sym, e) {
         //Center the Stage
         sym.$("stage").css({"margin-left":"auto","margin-right":"auto"});
         $("body").css("background-color","#031020");

      });
      //Edge binding end

      

      

      

      

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 3000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_exam}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("examtabin");
         

      });
      //Edge binding end

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 9000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 8000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      

      

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 7202, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 4750, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 5826, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 9750, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 10250, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_case}", "click", function(sym, e) {
         // insert code for mouse click here
         // play the timeline from the given position (ms or label)
         sym.play("casein");

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 5235, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 11296, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 12000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_investi}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("investigation");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 13000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_postim}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("postimin");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_xray}", "click", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("postimin");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_mcq_s}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("mcqin");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_broad_S}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("broadin");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_immint_s}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("immintin");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_exam_s}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("examclickin");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 6500, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'exam'
   (function(symbolName) {   
   
      Symbol.bindElementAction(compId, symbolName, "${_exam_icon}", "mouseover", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("out");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_exam_icon}", "mouseout", function(sym, e) {
         sym.stop("in");

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("exam");
   //Edge symbol end:'exam'

   //=========================================================
   
   //Edge symbol: 'case'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_cb_icon}", "mouseover", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("caseout");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_cb_icon}", "mouseout", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("casein");
         

      });
      //Edge binding end

   })("case");
   //Edge symbol end:'case'

   //=========================================================
   
   //Edge symbol: 'investi'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_invest_icon}", "mouseover", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("invout");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_invest_icon}", "mouseout", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("invin");
         

      });
      //Edge binding end

   })("investi");
   //Edge symbol end:'investi'

   //=========================================================
   
   //Edge symbol: 'inter'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_inter_icon}", "mouseover", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("interout");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_inter_icon}", "mouseout", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("interin");
         

      });
      //Edge binding end

   })("inter");
   //Edge symbol end:'inter'

   //=========================================================
   
   //Edge symbol: 'diagno'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_diag_icon}", "mouseover", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("diagout");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_diag_icon}", "mouseout", function(sym, e) {
         // stop the timeline at the given position (ms or label)
         sym.stop("diagin");
         

      });
      //Edge binding end

   })("diagno");
   //Edge symbol end:'diagno'

   //=========================================================
   
   //Edge symbol: 'logo1'
   (function(symbolName) {   
   
   })("logo1");
   //Edge symbol end:'logo1'

   //=========================================================
   
   //Edge symbol: 'logo2'
   (function(symbolName) {   
   
   })("logo2");
   //Edge symbol end:'logo2'

   //=========================================================
   
   //Edge symbol: 'mcq_s'
   (function(symbolName) {   
   
      Symbol.bindElementAction(compId, symbolName, "${_broad}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("broadin");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 587, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Text9}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("broadin");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 790, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_narrow}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play("narrowin");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1500, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("mcq_s");
   //Edge symbol end:'mcq_s'

   //=========================================================
   
   //Edge symbol: 'broad_S'
   (function(symbolName) {   
   
   })("broad_S");
   //Edge symbol end:'broad_S'

   //=========================================================
   
   //Edge symbol: 'immint_s'
   (function(symbolName) {   
   
   })("immint_s");
   //Edge symbol end:'immint_s'

   //=========================================================
   
   //Edge symbol: 'exam_s'
   (function(symbolName) {   
   
   })("exam_s");
   //Edge symbol end:'exam_s'

})(jQuery, AdobeEdge, "EDGE-10378066");