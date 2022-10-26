function showEm(userName, emServer) {
    userName = stringReverse(userName);
    emServer = stringReverse(emServer);
    var emLink = userName + emServer;
    document.write("<a class= \"hover:opacity-75\" href = \"mailto:" + emLink + "target = \"_blank\"rel = \"noreferrer\" > ");
    document.write("<svg width=\"30 px \" height=\"30 px \" class=\"inline \" viewBox=\"0 0 48 48 \"version = \"1.1\" xmlns = \"http://www.w3.org/2000/svg\"xmlns: xlink = \"http://www.w3.org/1999/xlink\" ><title > Linkedin < /title> <            g id = \"Icon/Social/linkedin-color\"stroke = \"none\"        stroke - width =\"1\"        fill = \"none\"fill - rule = \"evenodd\" >            <            path d = \"M20.9716667,33.5527338 L25.001,33.5527338 L25.001,27.1328007 C25.001,25.439485 25.3213333,23.7988354 27.4206667,23.7988354 C29.491,23.7988354 29.517,25.7351486 29.517,27.2404662 L29.517,33.5527338 L33.5506667,33.5527338 L33.5506667,26.4341413 C33.5506667,22.9381777 32.796,20.2505391 28.711,20.2505391 C26.7483333,20.2505391 25.432,21.3265278 24.8943333,22.3471839 L24.839,22.3471839 L24.839,20.5725357 L20.9716667,20.5725357 L20.9716667,33.5527338 Z M16.423,14.1202696 C15.1273333,14.1202696 14.0823333,15.1682587 14.0823333,16.4595785 C14.0823333,17.7508984 15.1273333,18.7992208 16.423,18.7992208 C17.7133333,18.7992208 18.761,17.7508984 18.761,16.4595785 C18.761,15.1682587 17.7133333,14.1202696 16.423,14.1202696 L16.423,14.1202696 Z M14.4026667,33.5527338 L18.4406667,33.5527338 L18.4406667,20.5725357 L14.4026667,20.5725357 L14.4026667,33.5527338 Z M9.76633333,40 C8.79033333,40 8,39.2090082 8,38.2336851 L8,9.76631493 C8,8.79065843 8.79033333,8 9.76633333,8 L38.234,8 C39.2093333,8 40,8.79065843 40,9.76631493 L40,38.2336851 C40,39.2090082 39.2093333,40 38.234,40 L9.76633333,40 Z\"            id = \"Shape\"            fill = \"#000000\" > < /path> <            /g> <            /svg> <            /a>");
}

function stringReverse(textString) {
    if (!textString) return '';
    var revString = '';
    for (i = textString.length - 1; i >= 0; i--)
        revString += textString.charAt(i);
    return revString;
}
/*
< a class = "hover:opacity-75"
 href = "mailto:ALLIA1999@HOTMAIL.COM"
                                    target = "_blank"
                                    rel = "noreferrer" >
                                        <
                                        svg width = "30px"
                                    height = "30px"
                                    class = "inline"
                                    xmlns = "http://www.w3.org/2000/svg"
                                    width = "16"
                                    height = "16"
                                    fill = "currentColor"
                                    class = "bi bi-envelope"
                                    viewBox = "0 0 16 16" >
                                        <
                                        path
                                    d = "M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" / >
                                        <
                                        /svg> <
                                        /a>
*/
