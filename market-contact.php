<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      type="text/javascript"
      src="market-fail/js-res/jquery58585.js"
    ></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet" />

    <title>جهات الاتصال</title>
    <meta property="og:title" content="جهات الاتصال" />
    <meta property="og:image" content="digital-logo.svg" />
    <meta property="og:description" content="جهات الاتصال" />
    <meta name="description" content="جهات الاتصال" />
    <link rel="shortcut icon" href="digital-logo.svg" type="image/x-icon" />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/bootstrap58585.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/button58585.css"
    />
    <link
      rel="preconnect"
      type="text/css"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      type="text/css"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/icons58585.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/media-query58585.css"
    />
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/jquery58585.js"
    ></script>
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/bootstrap58585.js"
    ></script>

    <style>
      body{
          direction: rtl;
          font-family: 'Roboto Condensed', sans-serif !important;
          font-size: 1rem;
          margin: 0;
          padding: 0;
      }

      button {
          cursor: pointer;
      }

      img {
          display: block;
      }

      a {
          text-decoration: none;
      }

      li {
          list-style: none;
      }

      video, img {
          max-width: 100%;

      }


      .hr-background {
          background: linear-gradient(to top, #27c0ab, #33c5a9, #40c9a6, #4ccea3, #58d29f);
          width: 100%;
          height: auto;
      }

      .contacts-title {
          text-align: center;
          font-weight: 600;
          color: #ffffff;
          font-size: 43px;
          padding-top: 94px;
          padding-bottom:  94px;
      }

      .form {
          margin: 72px  auto;
          width: 100%;
          background-color: white;
          padding: 3.125em;
          border-radius: 10px;
          display: flex;
          flex-direction: column;
          align-items: center;
          box-shadow: 5px 5px 15px -1px rgba(0,0,0,0.75);
      }

      .form-title {
          color: black;
          text-transform: uppercase;
          letter-spacing: 2px;
          display: block;
          font-weight: bold;
          font-size: x-large;
          margin-bottom: 0.5em;
      }

      .form--input {
          width: 100%;
          margin-bottom: 1.25em;
          height: 40px;
          border-radius: 5px;
          border: 1px solid gray;
          padding: 0.8em;
          font-family: 'Inter', sans-serif;
          outline: none;
      }

      .form--input:focus {
          border: 1px solid #639;
          outline: none;
      }


      .contacts-page {
          display: flex;
          flex-direction: row;
          gap: 46px;
      }

      .contacts-page-map, .contacts-page-contacts-list {
          width: 50%;
      }

      .contacts-list {
          padding: 0 46px;
      }

      .ogrn-title {
          color: inherit;
          font-size:  36px;
          font-weight: 600;
          margin-bottom: 33px;
      }


      .address-title, .mail-title, .phone-title {
          margin-bottom: 16px;
          font-size:18px;
          color: inherit;
      }

      .address, .mail, .phone {
          margin-bottom: 23px;
          font-size:  24px;
          font-weight: 600;
          color: inherit;
      }

      .spesial-link {
          display: flex;
          flex-direction: row;
          justify-content: center;
          gap:  142px;
          padding-top: 16px;
          padding-bottom: 16px;
      }

      .spesial-link a {
          color: inherit;
          font-size: 14px;
          font-weight: 600;
      }

      @media(max-width: 520px) {
      .contacts-page {
          flex-direction: column !important;
      }
      }
    </style>
  </head>

  <body>
    <section>
      <div class="hr-background">
        <div class="container">
          <h1 class="contacts-title">جهات الاتصال</h1>
        </div>
      </div>
      <div class="container">
        <form class="form" action="message.php">
          <span class="form-title">اكتب لنا</span>
          <input
            type="name"
            required
            placeholder="أدخل اسمك"
            class="form--input"
          />
          <input
            type="phone"
            required
            placeholder="أدخل رقم هاتفك"
            class="form--input"
          />
          <input
            type="email"
            required
            placeholder="عنوان البريد الإلكتروني"
            class="form--input"
          />
          <button class="button-4">اكتب لنا</button>
        </form>
      </div>
      
      <div class="container spesial-link">
        <a href="privacy-terms.php"> سياسة الخصوصية</a>
        <a href="terms-conditions.php"> الشروط والأحكام </a>
        <a href="contentDisclaimer.php">اخلاء المسؤوليه</a>
      </div>
    </section>
  </body>
</html>
