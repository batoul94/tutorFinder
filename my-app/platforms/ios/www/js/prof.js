

function getBody(content)
{
    test = content.toLowerCase();    
    var x = test.indexOf("<body");
    if(x == -1) return "";
    
    x = test.indexOf(">", x);
    if(x == -1) return "";
    
    var y = test.lastIndexOf("</body>");
    if(y == -1) y = test.lastIndexOf("</html>");
    if(y == -1) y = content.length;
    
    return content.slice(x + 1, y);
}



function loadHTML(url, fun, storage, param)
{
    var xhr = createXHR();
    xhr.onreadystatechange=function()
    {
        if(xhr.readyState == 4)
        {
            //if(xhr.status == 200)
            {
                storage.innerHTML = getBody(xhr.responseText);
                fun(storage, param);
            }
        }
    };
    
    xhr.open("GET", url , true);
    xhr.send(null);
    
}

/**
 Callback
 Assign directly a tag
	*/


function processHTML(temp, target)
{
    target.innerHTML = temp.innerHTML;
}

function loadWholePage(url)
{
    var y = document.getElementById("storage");
    var x = document.getElementById("displayed");
    loadHTML(url, processHTML, x, y);
}





