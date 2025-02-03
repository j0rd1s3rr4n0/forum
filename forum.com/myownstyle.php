<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Exo+2&subset=Latin">
<style>
    body::-webkit-scrollbar {
    width: 0.55em;
    border: 1px solid #090969;
    background-color: #090969;
    /* border-radius: 30px; */
    transform: translateX(3px);
    padding-right: 2pt;
  }

  body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 4px rgba(0, 0, 0, );
    /* border-radius: 30px; */
  }

  body::-webkit-scrollbar-thumb {
    background-color: white;
    /* #212529  */
    outline: 2px solid #090969;
    border-radius: 30px;
  }
  pre {
    color: #5bb170 !important;
    background: #141d2b !important;
    padding: 10pt;
    border-radius: 15pt;
  }
  code::-webkit-scrollbar,
  pre::-webkit-scrollbar {
    width: 0.5em;
    border: 1px solid #343a40;
    background-color: #343a40;
    border-radius: 30px;
    transform: translateX(3px);
    padding-right: 2pt;
  }

  code::-webkit-scrollbar-track,
  pre::-webkit-scrollbar-track {
    box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
  }

  code::-webkit-scrollbar-thumb,
  pre::-webkit-scrollbar-thumb {
    background-color: white;
    /* #212529  */
    outline: 2px solid #343a40;
    border-radius: 30px;
  }

  body {
    background: linear-gradient(91deg, #00001e, #0a0a6e) !important;
  }

  @font-face {
    font-family: 'Exo 2';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/exo2/v19/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKsOdC_.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  .bluegraded {
    background: -webkit-linear-gradient(140deg, rgba(113, 105, 255, 1) 10%, rgba(0, 212, 255, 1) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    font-family: "Exo 2";
  }

  .centerdiv {
    align-items: center;
    display: flex;
  }

  .donate-button {
    border: 0px solid white;
    border-radius: 20px;
    object-fit: cover;
    width: 166px;
    height: 60px;
    margin-top: 2%;
  }

  .donate-button:hover {
    box-shadow: 1px 1px 2px 2px white;
  }

  footer {
    margin-top: calc(70px);
    background: black;
    text-align-last: center;
  }

  .bluegraded-footer>a {
    font-size: 130%;
  }

  .bluegraded-footer>a :hover {
    font-weight: bold;
    font-size: 130%;
  }

  .card-margin {
    margin: 7px;
    border-radius: 15px;
  }

  a.usr-link {
    text-decoration: none;
    font-size: 110%;
    font-weight: bold;
    font-family: Arial;
    color: white;
  }

  a.usr-link:hover {
    text-decoration: none;
    color: #007bff;

  }

  ul.todo,
  ol.todo,
  ol.url,
  ul.url {
    list-style: none;
  }

  li.web:before {
    content: 'ߌ৻
 display: inline-block;
    height: 20px;
    width: 25px;
    margin-right: 5px;
  }

  li.empty:before {
    content: 'ߔ㧻
 display: inline-block;
    height: 20px;
    width: 25px;
    margin-right: 5px;
  }

  li.checked:before {
    content: '✅';
    display: inline-block;
    height: 20px;
    width: 25px;
    margin-right: 5px;
  }

  li.canceled:before {
    content: '❌';
    display: inline-block;
    height: 20px;
    width: 25px;
    margin-right: 5px;
  }

  li.error:before {
    content: '⚠️';
    display: inline-block;
    height: 20px;
    width: 25px;
    margin-right: 5px;
  }



  [data-title]:hover:after {
    opacity: 1;
    transition: all 0.1s ease 0.5s;
    visibility: visible;
  }

  [data-title]:after {
    content: attr(data-title);
    background-color: #333;
    color: #fff;
    font-size: 14px;
    position: absolute;
    padding: 3px 20px;
    bottom: 0vh;
    left: 1vw;
    white-space: nowrap;
    box-shadow: 1px 1px 3px #222222;
    opacity: 0;
    border: 1px solid #111111;
    z-index: 9;
    visibility: hidden;
    border-radius: 6px;
    color: rgba(0, 212, 255, 1);
    font-family: "Exo 2";
    text-decoration: none;

  }

  [data-title] {
    opacity: 1;
    transition: all 0.1s ease 0.5s;
    visibility: visible;
  }

  /* [data-title] {
    position: relative;
} */


  .editbtn {
    margin: 0px 5px 0px 5px;
    color: white;
    text-decoration: none;
  }

  .editbtn:hover {
    color: gold;
    text-decoration: none;
  }

  .ebtn_trash:hover {
    color: red;
  }

  .ebtn_hide:hover {
    color: grey;
  }

  .card-body {
    /*-ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
  */
    overflow-x: hidden;
    overflow-y: auto;
    height: 370px;
  }

  .card-body::-webkit-scrollbar {
    width: 0.5em;
    border: 1px solid #343a40;
    background-color: #343a40;
    border-radius: 30px;
    transform: translateX(3px);
    padding-right: 5px;
  }

  .card-body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
  }

  .card-body::-webkit-scrollbar-thumb {
    background-color: white;
    /* #212529  */
    outline: 2px solid #343a40;
    border-radius: 30px;
  }







  .title-wrapper {
    background-color:
      /*#343a40*/
      transparent !important;
    margin: 0 auto;
    border-radius: 5px;
    border: 1% solid #343a40;
    padding: 10px;
    margin-bottom: 20px;
    margin-top: -30px;

  }

  .title-page {
    text-align: center;
    font-size: 350%;
  }

  @media only screen and (max-width: 642px) {
    .title-wrapper {
      background-color:
        /*#343a40*/
        transparent !important;
      margin: 0 auto;
      border-radius: 5px;
      border: 1% solid #343a40;
      margin-top: -30px;
      margin-bottom: 20px;
    }

    .title-page {
      text-align: center;
      font-size: 250%;
    }
  }

  .wrapper {
    display: grid;
    gap: 1rem;
    grid-auto-rows: 32rem;
    grid-template-columns: repeat(auto-fill, minmax(min(100%, 25rem), 1fr));
    grid-auto-flow: dense;
  }

  .carteta {
    overflow-x: hidden;
    overflow-y: auto;
    border-radius: 5px;
    border-radius: 33px !important;
    background-color: #343a40;
  }

  .carteta::-webkit-scrollbar {
    width: 0.5em;
    border: 1px solid #343a40;
    background-color: #343a40;
    border-radius: 30px;
    transform: translateX(3px);
    padding-right: 5px;
  }

  .carteta::-webkit-scrollbar-track {
    box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
    border-radius: 30px;
  }

  .carteta::-webkit-scrollbar-thumb {
    background-color: white;
    /* #212529  */
    outline: 2px solid #343a40;
    border-radius: 30px;
  }

  @media only screen and (min-width: 992px) {
    .modal-content {
      align-items: center;
      display: flex;
      justify-content: center;
      margin: 20vh -31%;
      max-height: 1000px;
      max-width: 1000px;
      height: 40vh;
      width: 60vw;
    }

  }
</style>