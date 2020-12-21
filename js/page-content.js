// event listeners
// wait for page load
$(document).ready(function(){
    // run on page load
    createPage();
});

// create and show modal
// function to populate modal with artist info from json file, matching the url to the id
function createPage() {
    // clicking on the thumbnail image
    // if hash value not empty create modal
    if (window.location.hash.substr(1) != "") {
        let param = window.location.hash.substr(1);
        param = param.replace(/%20/g, " ");
        let id;
        $.ajax({    
            type: "GET", 
            url: './artworks.json',
            dataType: 'json',
            success: function(data){  
                // finding the right id from the artist name which is located in the query string
                for (let i = 0; i < data.length; i++) {
                    if (param === data[i].artwork.artwork_name) {
                        id = [i];
                    }
                }
                //removing any paragraphs which do not belong to this artist id
                $("p.modal-text:not(.text" + data[id].id + ")").hide();
                //injecting the text into elements with class specified
                // POPULATING INFO 
                const infoModal = $('#infoModal');
                // artwork name
                document.querySelector('.artwork-title-text').innerHTML = data[id].artwork.artwork_name;
                // artist name
                document.querySelector('.artist-name-text').innerHTML = data[id].artist.name;
                //infoModal.find('.artwork-title-text').text(data[id].artwork.artwork_name);
                console.log(data[id].artwork.artwork_name);
                // Set modal image 
                var x = document.getElementById("modalImage");
                x.getAttributeNode("src").value = `./img/artists-work/` + data[id].artwork.image.url;
                // Top Section Artwork TYPE
                infoModal.find('.artwork-type').text(data[id].artwork.artwork_type);
                // Top Section Artwork call to action 
                // Only create links with valid urls
                if (data[id].artwork.details.actionLink != "addlink") {                    // create booking link
                    let action = document.getElementById('actionLink');
                    action.getAttributeNode("href").value = data[id].artwork.details.actionLink;
                    action.innerHTML = data[id].artwork.details.actionText;
                    document.querySelector(".bookingOpensText").innerHTML = data[id].artwork.details.actionText;
                    // hide susbtitue booking text
                    $(".bookingOpensText" ).hide();
                    $("#actionLink" ).show();
                } else {
                    // create coming soon 
                    document.querySelector(".bookingOpensText").innerHTML = data[id].artwork.details.actionText;
                    // hide booking link
                    $("#actionLink" ).hide();
                    $(".bookingOpensText" ).show();
                };
               
                // Artist Name
                infoModal.find('.artist-name-text').text(data[id].artist.name);
                if (data[id].artwork.details.practicalInfo != "") {
                    $( "#practicalInfoContainer" ).removeClass( "hide" );
                    $( "#middleContainer" ).addClass( "border-sides" );
                    infoModal.find('.practical-info-text').text(data[id].artwork.details.practicalInfo)
                } else {
                    $( "#practicalInfoContainer" ).addClass( "hide" );
                    $( "#middleContainer" ).removeClass( "border-sides" );
                    $( "#middleContainer" ).addClass( "border-left " );
                }
                // empty container to get rid of previous appended elements
                $("#aboutArtist").empty();
                // Artist Info: loop through array of artist bio - print new string as a <p> so displays on new line
                for (let i = 0; i < data[id].artist.bio_100w.length; i++) {
                    let mainContainer = document.getElementById("aboutArtist");
                    var p = document.createElement('p');
                    p.setAttribute("class", "about-modal-text text" + data[id].id);
                    p.innerHTML = data[id].artist.bio_100w[i];
                    mainContainer.appendChild(p);
                }
                // Artwork Name
                infoModal.find('.artwork-title-text').text(data[id].artwork.artwork_name);             
                // Artwork Description
                let mainContainer = document.getElementById("aboutArtwork");
                var p = document.createElement('p');
                p.setAttribute("class", "modal-text text" + data[id].id);
                p.innerHTML = data[id].artwork.artwork_description_50w_short;
                mainContainer.appendChild(p);       
                // SOCIAL MEDIA SECTION
                // If no social media accounts in json, then hide div
                let socialAccounts = Object.keys(data[id].social_media).length; //count how many social media accounts artist needs displaying
                if (socialAccounts === 0) {
                    $( "#socialMediaContainer" ).addClass( "hide" );
                } else {
                    $( "#socialMediaContainer" ).removeClass( "hide" );
                }
                // Show/Hide Website & add personal link
                if (data[id].social_media["website"]) {  
                    $( "#websiteIcon" ).removeClass( "hide" );
                    var l = document.getElementById('websiteLink');
                    l.getAttributeNode("href").value = data[id].social_media.website;
                } else {
                    $( "#websiteIcon" ).addClass( "hide" )
                }
                // Show/Hide Instagram & add personal link
                if (data[id].social_media["instagram"]) {  
                    $( "#instagram" ).removeClass( "hide" );
                    var i = document.getElementById('instaLink');
                    i.getAttributeNode("href").value = data[id].social_media.instagram;
                } else {
                    $( "#instagram" ).addClass( "hide" )
                }
                // Show/Hide Twitter & add personal link
                if (data[id].social_media["twitter"]) {  
                    $( "#twitter" ).removeClass( "hide" );
                    var t = document.getElementById('twitLink');
                    t.getAttributeNode("href").value = data[id].social_media.twitter;
                } else {
                    $( "#twitter" ).addClass( "hide" )
                }
                // Show/Hide LinkedIn & add personal link
                if (data[id].social_media["linkedIn"]) {  
                    $( "#linkedIn" ).removeClass( "hide" );
                    var l = document.getElementById('linkedInLink');
                    l.getAttributeNode("href").value = data[id].social_media.linkedIn;
                } else {
                    $( "#linkedIn" ).addClass( "hide" )
                }
                infoModal.modal('show');
            }
        });
        return false;
    }  
}