	function add_Cookie() 	{

    function createCookie(name, value, days) {
        var date, expires;
        if (days) {
            date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            expires = "; expires="+date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = name+"="+value+expires+"; path=/";
    }
    function getCookie(name) {
        function escape(s) { return s.replace(/([.*+?\^${}()|\[\]\/\\])/g, '\\$1'); };
        var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
        return match ? match[1] : null;
    }

    
    createCookie('Crm_andersen',getQuery('com'),'30')
    
    console.log(getCookie("Crm_andersen"));
    if(getCookie("Crm_andersen") != null){
        console.log('start');

    }
}