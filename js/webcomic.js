/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    var currIndex = -1;
    setCurrIndex();
    
    function displayNavigation(){
        var nav = document.createElement("nav");
        //have to get the current index
        //using json to send parameteer
        nav.innerHTML("<a href='index.html' class='first' rel='start'></a>" + 
                    "<a href='" + getPrevIndex() + ".html' class='prev' rel='prev'></a>" +
                    "<a href='" + getNextIndex() + ".html' class='next' rel='next'></a>+ " + 
                    "<a href='1.html' class='last' rel='index'></a>");
    }
    
    function setCurrIndex(){
        currIndex = 1;
    }
    
    function getCurrIndex(){
        //check the index based on the url 
        return currIndex;
    }
    
    function getNextIndex(){
        return currIndex+1;
    }
    
    function getPrevIndex(){
        return currIndex-1;
    }
});

