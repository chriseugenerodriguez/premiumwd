
        $(document).ready(function () {
            $("div.holder").jPages({
                containerID: "itemContainer",
                perPage: 5,
				previous: 'Previous',
				next: 'Next →',
                keyBrowse: true,
               // scrollBrowse: true,
                animation: "fadeIn",
                callback: function (pages,
        items) {
                    $("#legend1").html("Page " + pages.current + " of " + pages.count);
                    $("#legend2").html("Elements "+items.range.start + " - " + items.range.end + " of " + items.count);
                } 
            });
			 $("div.holder1").jPages({
                containerID: "itemContainer1",
                perPage: 2,
				previous: 'Previous',
				next: 'Next →',
                keyBrowse: true,
               // scrollBrowse: true,
                animation: "fadeIn",
                callback: function (pages,
        items) {
                    $("#legend1").html("Page " + pages.current + " of " + pages.count);
                    $("#legend2").html("Elements "+items.range.start + " - " + items.range.end + " of " + items.count);
                } 
            });
			$("div.holder2").jPages({
                containerID: "itemContainer2",
                perPage: 2,
				previous: 'Previous',
				next: 'Next →',
                keyBrowse: true,
               // scrollBrowse: true,
                animation: "fadeIn",
                callback: function (pages,
        items) {
                    $("#legend1").html("Page " + pages.current + " of " + pages.count);
                    $("#legend2").html("Elements "+items.range.start + " - " + items.range.end + " of " + items.count);
                } 
            });
			$("div.holder3").jPages({
                containerID: "itemContainer3",
                perPage: 2,
				previous: 'Previous',
				next: 'Next →',
                keyBrowse: true,
               // scrollBrowse: true,
                animation: "fadeIn",
                callback: function (pages,
        items) {
                    $("#legend1").html("Page " + pages.current + " of " + pages.count);
                    $("#legend2").html("Elements "+items.range.start + " - " + items.range.end + " of " + items.count);
                } 
            });
            
        });
    
    