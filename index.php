<head>
    <title>ATM ~ code (Coming Soon)</title>
    <style>
        body {
            background: #EEE;
            text-align: center;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            cursor: default;
        }

        body:after {
            content: "";
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MHB4IiBoZWlnaHQ9IjUwcHgiIHZpZXdCb3g9IjAgMCA1MCA1MCI+PHJlY3QgeD0iMjMuODQ2IiB5PSIwLjMzMSIgdHJhbnNmb3JtPSJtYXRyaXgoMC43MDczIC0wLjcwNjkgMC43MDY5IDAuNzA3MyAtMTAuNDM3MiAyNC45ODY3KSIgd2lkdGg9IjIuMjIxIiBoZWlnaHQ9IjQ5LjUzMiIvPjxyZWN0IHg9IjIzLjg0NSIgeT0iMC4zMzIiIHRyYW5zZm9ybT0ibWF0cml4KDAuNzA2OSAwLjcwNzMgLTAuNzA3MyAwLjcwNjkgMjUuMDY3NSAtMTAuMjk1MykiIHdpZHRoPSIyLjIyMSIgaGVpZ2h0PSI0OS41MzIiLz48L3N2Zz4=);
            opacity: 0.020;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
        }

        #container {
            top: 50%;
            left: 50%;
            margin-top: -200px;
            margin-left: -125px;
            position: fixed;
        }

        #avatar {
            border: white solid 7px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
            border-radius: 50%;
            animation: bounce cubic-bezier(0.19, 1.0, 0.22, 1.0) 1.5s alternate infinite;
            -webkit-animation: bounce cubic-bezier(0.19, 1.0, 0.22, 1.0) 1.5s alternate infinite;
        }

        @keyframes bounce {
            to {
                transform: translateY(-12px) scale(1.03);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }
        }

        @-webkit-keyframes bounce {
            to {
                -webkit-transform: translateY(-12px) scale(1.03);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }
        }

        #text {
            margin-top: 7px;
        }

        h1, p {
            margin: 0;
            padding: 0;

            font-family: Segoe UI, sans-serif;
            font-weight: 100;
            font-style: normal;
            color: rgba(0, 0, 0, 1);
        }

        h1 {
            color: rgba(1, 106, 154, 0.75);
            text-shadow: 0 1px 0 rgba(255, 255, 255, 1.0);
        }

        p {
            color: rgba(0, 0, 0, 0.25);
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
        }
    </style>
</head>

<div id="container">
    <img alt="Coming Soon" title="Coming Soon" id="avatar" width="250" draggable="false" src="bg.jpeg">

    <div id="text">
        <h1>Building...</h1>
        <p title="We Well">(coming soon)</p>
    </div>
</div>
