<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>@yield('header_title')</title>

    <div class="header_container">
        <div class="shop_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="30" viewBox="0 0 33 30" fill="none" >
                <path d="M32.75 10C32.7507 9.88378 32.7349 9.76805 32.7031 9.65625L30.4609 1.8125C30.3102 1.29205 29.9952 0.834318 29.5629 0.507646C29.1307 0.180975 28.6043 0.00289522 28.0625 0H4.9375C4.39568 0.00289522 3.86933 0.180975 3.43706 0.507646C3.00478 0.834318 2.68977 1.29205 2.53906 1.8125L0.298438 9.65625C0.26616 9.76798 0.249853 9.88371 0.250001 10V12.5C0.250001 13.4703 0.475908 14.4272 0.909831 15.2951C1.34375 16.1629 1.97378 16.9178 2.75 17.5V27.5C2.75 28.163 3.01339 28.7989 3.48223 29.2678C3.95107 29.7366 4.58696 30 5.25 30H27.75C28.413 30 29.0489 29.7366 29.5178 29.2678C29.9866 28.7989 30.25 28.163 30.25 27.5V17.5C31.0262 16.9178 31.6562 16.1629 32.0902 15.2951C32.5241 14.4272 32.75 13.4703 32.75 12.5V10ZM4.9375 2.5H28.0625L29.8469 8.75H3.15781L4.9375 2.5ZM12.75 11.25H20.25V12.5C20.25 13.4946 19.8549 14.4484 19.1516 15.1517C18.4484 15.8549 17.4946 16.25 16.5 16.25C15.5054 16.25 14.5516 15.8549 13.8483 15.1517C13.1451 14.4484 12.75 13.4946 12.75 12.5V11.25ZM10.25 11.25V12.5C10.25 13.4946 9.85491 14.4484 9.15165 15.1517C8.44839 15.8549 7.49456 16.25 6.5 16.25C5.50544 16.25 4.55161 15.8549 3.84835 15.1517C3.14509 14.4484 2.75 13.4946 2.75 12.5V11.25H10.25ZM27.75 27.5H5.25V18.625C5.6615 18.708 6.08022 18.7498 6.5 18.75C7.47028 18.75 8.42724 18.5241 9.29508 18.0902C10.1629 17.6562 10.9178 17.0262 11.5 16.25C12.0822 17.0262 12.8371 17.6562 13.7049 18.0902C14.5728 18.5241 15.5297 18.75 16.5 18.75C17.4703 18.75 18.4272 18.5241 19.2951 18.0902C20.1629 17.6562 20.9178 17.0262 21.5 16.25C22.0822 17.0262 22.8371 17.6562 23.7049 18.0902C24.5728 18.5241 25.5297 18.75 26.5 18.75C26.9198 18.7498 27.3385 18.708 27.75 18.625V27.5ZM26.5 16.25C25.5054 16.25 24.5516 15.8549 23.8483 15.1517C23.1451 14.4484 22.75 13.4946 22.75 12.5V11.25H30.25V12.5C30.25 13.4946 29.8549 14.4484 29.1516 15.1517C28.4484 15.8549 27.4946 16.25 26.5 16.25Z" fill="#343434"/>
            </svg>
        </div>
        <div class="shop_name">
            <svg xmlns="http://www.w3.org/2000/svg" width="157" height="17" viewBox="0 0 157 17" fill="none">
                <path d="M15.7298 5.43C15.9298 7.11 15.7998 8.56 15.3398 9.78C14.8998 11 14.2598 12.06 13.4198 12.96C12.5798 13.86 11.6498 14.69 10.6298 15.45C10.5498 15.49 10.4598 15.54 10.3598 15.6C10.2598 15.64 10.1498 15.67 10.0298 15.69C9.04981 15.95 8.1798 16.15 7.4198 16.29C6.6798 16.43 5.8698 16.46 4.9898 16.38C4.6898 16.38 4.4398 16.31 4.2398 16.17C3.8398 15.91 3.4398 15.69 3.0398 15.51C2.6598 15.33 2.3098 15.03 1.9898 14.61C1.5498 14.05 1.2498 13.48 1.0898 12.9C0.949805 12.32 0.779805 11.69 0.579805 11.01C0.559805 10.91 0.549805 10.82 0.549805 10.74C0.549805 10.66 0.549805 10.58 0.549805 10.5C0.569805 10.16 0.579805 9.84 0.579805 9.54C0.579805 9.22 0.619805 8.84 0.699805 8.4C0.779805 7.96 0.949805 7.42 1.2098 6.78C1.4698 6.14 1.7298 5.59 1.9898 5.13C2.2898 4.57 2.6698 3.97 3.12981 3.33C3.58981 2.67 4.0998 2.09 4.6598 1.59C5.2198 1.09 5.8098 0.77 6.4298 0.63C7.0498 0.49 7.66981 0.649999 8.28981 1.11C8.50981 1.27 8.61981 1.5 8.61981 1.8C8.61981 2.04 8.5398 2.26 8.3798 2.46C8.35981 2.48 8.3398 2.51 8.3198 2.55C8.3198 2.57 8.3098 2.59 8.28981 2.61C8.18981 2.77 8.0398 2.93 7.8398 3.09C6.8198 3.83 5.93981 4.79 5.1998 5.97C4.4598 7.13 3.9398 8.37 3.6398 9.69C3.5598 10.03 3.4998 10.46 3.4598 10.98C3.4198 11.48 3.4398 12.02 3.5198 12.6C3.5398 12.72 3.5598 12.83 3.5798 12.93C3.5998 13.03 3.6398 13.13 3.6998 13.23C3.8798 13.63 4.1798 13.85 4.5998 13.89C4.9798 13.95 5.3498 13.98 5.7098 13.98C6.0698 13.96 6.45981 13.91 6.87981 13.83C7.01981 13.79 7.14981 13.72 7.2698 13.62C7.4098 13.52 7.54981 13.44 7.68981 13.38C7.7898 13.34 7.8898 13.34 7.98981 13.38C8.08981 13.4 8.18981 13.4 8.28981 13.38C8.98981 13.14 9.6398 12.72 10.2398 12.12C10.8398 11.52 11.3498 10.83 11.7698 10.05C12.2098 9.27 12.5298 8.48 12.7298 7.68C12.9298 6.88 12.9698 6.15 12.8498 5.49C12.7498 4.93 12.5698 4.48 12.3098 4.14C12.0698 3.78 11.7598 3.43 11.3798 3.09C11.2798 3.01 11.1698 2.94 11.0498 2.88C10.9298 2.82 10.8098 2.78 10.6898 2.76C10.5698 2.74 10.4498 2.67 10.3298 2.55C10.2298 2.37 10.2198 2.19 10.2998 2.01C10.3998 1.81 10.5598 1.7 10.7798 1.68C11.0598 1.68 11.3298 1.69 11.5898 1.71C11.8698 1.71 12.1198 1.72 12.3398 1.74C12.4598 1.76 12.5798 1.79 12.6998 1.83C12.8198 1.87 12.9298 1.92 13.0298 1.98C13.1698 2.06 13.2898 2.14 13.3898 2.22C13.5098 2.3 13.6598 2.37 13.8398 2.43C13.9998 2.47 14.1598 2.58 14.3198 2.76C14.6598 3.06 14.9098 3.39 15.0698 3.75C15.2498 4.11 15.4398 4.53 15.6398 5.01C15.6998 5.13 15.7298 5.27 15.7298 5.43Z" fill="#343434"/>
                <path d="M39.9658 5.91C39.9658 6.09 39.9358 6.48 39.8758 7.08C39.8158 7.66 39.7358 8.36 39.6358 9.18C39.5358 10 39.4258 10.86 39.3058 11.76C39.2058 12.64 39.1058 13.49 39.0058 14.31C38.9058 15.11 38.8258 15.79 38.7658 16.35C38.7458 16.53 38.6558 16.67 38.4958 16.77C38.3358 16.89 38.1558 16.92 37.9558 16.86C37.4758 16.76 37.1258 16.58 36.9058 16.32C36.8658 16.28 36.8558 16.22 36.8758 16.14C36.8958 16.06 36.8858 16 36.8458 15.96C36.7658 15.82 36.6558 15.68 36.5158 15.54C36.3958 15.4 36.3258 15.28 36.3058 15.18C36.2458 14.92 36.2358 14.53 36.2758 14.01C36.3158 13.47 36.3758 12.93 36.4558 12.39C36.5558 11.83 36.6258 11.4 36.6658 11.1C36.8058 9.86 36.9158 8.69 36.9958 7.59C37.0958 6.49 37.1758 5.39 37.2358 4.29C37.2358 4.17 37.1658 4.07 37.0258 3.99C36.9058 3.89 36.7858 3.88 36.6658 3.96C36.1258 4.32 35.5958 4.81 35.0758 5.43C34.5758 6.03 34.1158 6.65 33.6958 7.29C33.6158 7.41 33.5558 7.49 33.5158 7.53C33.4758 7.55 33.4058 7.6 33.3058 7.68C33.1258 7.88 32.8958 8.14 32.6158 8.46C32.3358 8.76 32.0458 9.04 31.7458 9.3C31.4458 9.54 31.1758 9.67 30.9358 9.69C30.7958 9.69 30.5958 9.65 30.3358 9.57C30.0758 9.49 29.8858 9.42 29.7658 9.36C29.4458 9.18 29.2158 8.86 29.0758 8.4C28.9558 7.94 28.7858 7.54 28.5658 7.2C28.5058 7.1 28.4558 7 28.4158 6.9C28.3758 6.8 28.3358 6.7 28.2958 6.6C28.1758 5.94 28.0358 5.31 27.8758 4.71C27.7358 4.11 27.5658 3.54 27.3658 3C27.3058 2.84 27.1958 2.74 27.0358 2.7C26.8958 2.64 26.7558 2.66 26.6158 2.76C26.2758 3.1 26.0058 3.51 25.8058 3.99C25.6258 4.45 25.4458 4.93 25.2658 5.43C25.1058 5.91 24.8858 6.35 24.6058 6.75C24.5458 6.83 24.4958 6.9 24.4558 6.96C24.4158 7 24.3858 7.06 24.3658 7.14C23.9658 8.46 23.5358 9.75 23.0758 11.01C22.6158 12.25 22.1558 13.51 21.6958 14.79C21.5358 15.17 21.3058 15.45 21.0058 15.63C20.9258 15.65 20.8558 15.68 20.7958 15.72C20.7358 15.74 20.6658 15.77 20.5858 15.81C20.2658 16.01 19.9158 16.09 19.5358 16.05C19.5158 16.01 19.4758 15.99 19.4158 15.99C19.2358 15.97 19.0858 15.89 18.9658 15.75C18.8458 15.59 18.7958 15.42 18.8158 15.24C19.0958 13.94 19.4358 12.75 19.8358 11.67C20.2358 10.57 20.5958 9.4 20.9158 8.16C20.9158 8.06 20.9558 7.97 21.0358 7.89C21.4558 7.01 21.8558 6.07 22.2358 5.07C22.6158 4.07 23.0458 3.14 23.5258 2.28C24.0258 1.42 24.6458 0.76 25.3858 0.3C25.5858 0.159999 25.7858 0.0799999 25.9858 0.0600001C26.4458 -0.02 26.8558 -0.02 27.2158 0.0600001C27.5958 0.14 27.9758 0.28 28.3558 0.48C28.4758 0.56 28.5858 0.649999 28.6858 0.749999C28.8058 0.829999 28.9058 0.93 28.9858 1.05C29.7658 2.09 30.3058 3.45 30.6058 5.13C30.6258 5.27 30.7058 5.37 30.8458 5.43C30.9858 5.47 31.1058 5.44 31.2058 5.34C31.5058 5.02 31.8058 4.65 32.1058 4.23C32.4258 3.81 32.7458 3.41 33.0658 3.03C33.9858 2.05 34.9758 1.32 36.0358 0.840001C36.3558 0.68 36.8158 0.61 37.4158 0.63C38.0158 0.63 38.5758 0.869999 39.0958 1.35C39.4758 1.67 39.7158 2.09 39.8158 2.61C39.9358 3.13 39.9858 3.68 39.9658 4.26C39.9658 4.84 39.9658 5.39 39.9658 5.91Z" fill="#343434"/>
                <path d="M49.9671 2.7C49.9671 2.86 49.9371 3.03 49.8771 3.21C49.8171 3.37 49.7671 3.55 49.7271 3.75C49.7071 3.95 49.6771 4.15 49.6371 4.35C49.5971 4.55 49.5571 4.73 49.5171 4.89C49.4771 5.15 49.4371 5.39 49.3971 5.61C49.3571 5.81 49.3171 6.04 49.2771 6.3C49.2771 6.38 49.2571 6.45 49.2171 6.51C49.1971 6.55 49.1671 6.61 49.1271 6.69C49.1271 6.77 49.1271 6.85 49.1271 6.93C49.1271 6.99 49.1171 7.05 49.0971 7.11C49.0771 7.19 49.0471 7.31 49.0071 7.47C48.9871 7.63 48.9671 7.74 48.9471 7.8C48.7271 8.72 48.5371 9.57 48.3771 10.35C48.2371 11.13 48.0371 11.85 47.7771 12.51C47.7171 12.65 47.6871 12.81 47.6871 12.99C47.6471 13.31 47.5771 13.68 47.4771 14.1C47.3971 14.52 47.2971 14.92 47.1771 15.3C47.1371 15.48 47.0971 15.66 47.0571 15.84C47.0371 16.02 46.9471 16.16 46.7871 16.26C46.4271 16.5 46.0571 16.52 45.6771 16.32C45.6571 16.28 45.6271 16.25 45.5871 16.23C45.5471 16.21 45.5071 16.19 45.4671 16.17C45.2271 15.99 45.0671 15.77 44.9871 15.51C44.9271 15.35 44.8671 15.22 44.8071 15.12C44.7471 15.02 44.6771 14.9 44.5971 14.76C44.5371 14.58 44.5271 14.36 44.5671 14.1C44.6271 13.84 44.6871 13.61 44.7471 13.41C45.0271 12.45 45.3071 11.41 45.5871 10.29C45.8871 9.15 46.1671 8.03 46.4271 6.93C46.5671 6.47 46.6571 6.01 46.6971 5.55C46.7571 5.07 46.8471 4.58 46.9671 4.08C47.0271 3.86 47.0671 3.64 47.0871 3.42C47.1271 3.18 47.1571 2.94 47.1771 2.7C47.2171 2.56 47.2471 2.4 47.2671 2.22C47.2871 2.02 47.2971 1.85 47.2971 1.71C47.3171 1.35 47.4071 1.11 47.5671 0.99C47.7271 0.870001 47.8871 0.8 48.0471 0.779999C48.3471 0.72 48.5771 0.73 48.7371 0.81C48.9171 0.869999 49.1171 0.98 49.3371 1.14C49.7571 1.44 49.9571 1.69 49.9371 1.89C49.9371 2.09 49.9471 2.36 49.9671 2.7Z" fill="#343434"/>
                <path d="M63.4757 2.88C63.5757 3.04 63.5857 3.22 63.5057 3.42C63.4457 3.6 63.3157 3.73 63.1157 3.81C62.8757 3.89 62.5957 3.93 62.2757 3.93C61.9757 3.93 61.6357 3.94 61.2557 3.96C61.0357 3.96 60.8257 4 60.6257 4.08C60.4257 4.16 60.2457 4.21 60.0857 4.23C59.7057 4.25 59.4057 4.2 59.1857 4.08C58.9657 3.96 58.6957 3.97 58.3757 4.11C58.2957 4.17 58.1957 4.26 58.0757 4.38C57.9757 4.48 57.8757 4.57 57.7757 4.65C57.5157 4.81 57.3457 5.02 57.2657 5.28C57.1657 5.62 57.2357 5.89 57.4757 6.09C57.6357 6.27 57.7957 6.44 57.9557 6.6C58.1357 6.76 58.2957 6.93 58.4357 7.11C58.5557 7.27 58.6957 7.36 58.8557 7.38C58.9357 7.38 59.0457 7.43 59.1857 7.53C59.4857 7.79 59.8057 8.05 60.1457 8.31C60.4857 8.57 60.7557 8.85 60.9557 9.15C60.9957 9.19 61.0357 9.25 61.0757 9.33C61.1357 9.39 61.1957 9.44 61.2557 9.48C61.6757 9.86 61.9557 10.37 62.0957 11.01C62.2557 11.65 62.2557 12.3 62.0957 12.96C61.9357 13.6 61.5957 14.15 61.0757 14.61C60.8757 14.81 60.6657 15.02 60.4457 15.24C60.2257 15.44 59.9557 15.59 59.6357 15.69C59.6157 15.71 59.5757 15.71 59.5157 15.69C59.4557 15.67 59.4057 15.66 59.3657 15.66C58.9657 15.74 58.5757 15.85 58.1957 15.99C57.8157 16.13 57.3757 16.19 56.8757 16.17C56.6557 16.17 56.4357 16.15 56.2157 16.11C55.9957 16.07 55.7657 16.03 55.5257 15.99C55.1857 15.97 54.8957 15.84 54.6557 15.6C54.6357 15.56 54.6157 15.54 54.5957 15.54C54.5757 15.54 54.5557 15.53 54.5357 15.51C54.3957 15.41 54.2757 15.3 54.1757 15.18C54.0957 15.06 54.0257 14.93 53.9657 14.79C53.9257 14.63 53.8657 14.48 53.7857 14.34C53.7057 14.18 53.6557 14.01 53.6357 13.83C53.6157 13.63 53.6857 13.49 53.8457 13.41C54.0257 13.33 54.1857 13.34 54.3257 13.44C54.5457 13.62 54.7757 13.71 55.0157 13.71C55.8357 13.83 56.5657 13.8 57.2057 13.62C57.8657 13.42 58.4657 13.11 59.0057 12.69C59.1857 12.55 59.3357 12.35 59.4557 12.09C59.4957 12.01 59.5357 11.95 59.5757 11.91C59.6157 11.85 59.6457 11.79 59.6657 11.73C59.8057 11.55 59.8957 11.36 59.9357 11.16C60.0357 10.78 59.9457 10.44 59.6657 10.14C59.2857 9.74 58.8457 9.4 58.3457 9.12C57.8457 8.84 57.3357 8.55 56.8157 8.25C56.6157 8.13 56.4357 7.95 56.2757 7.71C56.1557 7.55 56.0357 7.39 55.9157 7.23C55.8157 7.05 55.6957 6.87 55.5557 6.69C55.3557 6.49 55.2257 6.26 55.1657 6C55.0457 5.42 54.9557 4.87 54.8957 4.35C54.8557 3.83 54.9657 3.34 55.2257 2.88C55.3457 2.6 55.5657 2.31 55.8857 2.01C56.2257 1.69 56.5257 1.47 56.7857 1.35C57.0457 1.19 57.4657 1.07 58.0457 0.99C58.6457 0.890001 59.2657 0.840001 59.9057 0.840001C60.5657 0.840001 61.1057 0.929999 61.5257 1.11C61.6857 1.19 61.8457 1.28 62.0057 1.38C62.1657 1.48 62.3157 1.57 62.4557 1.65C62.7757 1.79 63.0357 2.05 63.2357 2.43C63.2557 2.51 63.2857 2.59 63.3257 2.67C63.3857 2.73 63.4357 2.8 63.4757 2.88Z" fill="#343434"/>
                <path d="M79.1116 2.34C79.1116 2.72 78.9216 2.98 78.5416 3.12C78.1616 3.26 77.7216 3.34 77.2216 3.36C76.7216 3.38 76.2716 3.42 75.8716 3.48C75.4916 3.5 75.1016 3.56 74.7016 3.66C74.3216 3.76 73.9616 3.84 73.6216 3.9C73.4016 3.94 73.2116 3.94 73.0516 3.9C72.9116 3.86 72.7516 3.83 72.5716 3.81C72.4716 3.79 72.3716 3.76 72.2716 3.72C72.1716 3.68 72.0716 3.65 71.9716 3.63C71.8916 3.57 71.8016 3.53 71.7016 3.51C71.6016 3.49 71.5216 3.45 71.4616 3.39C71.3216 3.29 71.1916 3.26 71.0716 3.3C70.8916 3.34 70.7716 3.29 70.7116 3.15C70.5516 2.87 70.5916 2.59 70.8316 2.31C71.2916 1.79 71.9016 1.43 72.6616 1.23C73.4216 1.03 74.2616 0.89 75.1816 0.81C75.7416 0.73 76.3016 0.72 76.8616 0.779999C77.4216 0.82 77.8816 0.94 78.2416 1.14C78.3816 1.2 78.4816 1.29 78.5416 1.41C78.6016 1.51 78.6816 1.6 78.7816 1.68C79.0016 1.84 79.1116 2.06 79.1116 2.34ZM73.9216 15.03C73.9816 15.17 73.9816 15.31 73.9216 15.45C73.8616 15.57 73.7616 15.65 73.6216 15.69C73.1216 15.93 72.5516 16.1 71.9116 16.2C71.2916 16.32 70.6616 16.35 70.0216 16.29C69.3816 16.25 68.8016 16.11 68.2816 15.87C67.7616 15.61 67.3816 15.25 67.1416 14.79C66.8216 14.21 66.6916 13.51 66.7516 12.69C66.8316 11.87 66.9916 11.04 67.2316 10.2C67.4916 9.36 67.7216 8.62 67.9216 7.98C68.1216 7.44 68.3116 6.8 68.4916 6.06C68.6916 5.32 68.9216 4.7 69.1816 4.2C69.2616 4 69.3916 3.88 69.5716 3.84C69.7516 3.78 69.9016 3.81 70.0216 3.93C70.1216 4.01 70.2116 4.09 70.2916 4.17C70.3716 4.23 70.4516 4.3 70.5316 4.38C70.7916 4.72 70.9016 5.09 70.8616 5.49C70.7816 6.33 70.6116 7.23 70.3516 8.19C70.0916 9.15 69.8316 10.11 69.5716 11.07C69.3116 12.01 69.1416 12.87 69.0616 13.65C69.0416 13.83 69.0916 13.99 69.2116 14.13C69.3516 14.27 69.5116 14.33 69.6916 14.31C70.2116 14.29 70.7216 14.19 71.2216 14.01C71.7216 13.81 72.1716 13.75 72.5716 13.83C72.7916 13.85 72.9516 13.94 73.0516 14.1C73.1716 14.24 73.3116 14.36 73.4716 14.46C73.7116 14.62 73.8616 14.81 73.9216 15.03ZM74.6116 9.54C74.6116 9.6 74.6016 9.66 74.5816 9.72C74.5816 9.76 74.5816 9.8 74.5816 9.84C74.5416 10.1 74.4116 10.31 74.1916 10.47C73.9916 10.61 73.7716 10.67 73.5316 10.65C73.1116 10.61 72.7516 10.45 72.4516 10.17C72.1716 9.89 71.9616 9.57 71.8216 9.21C71.7416 8.99 71.7516 8.77 71.8516 8.55C71.9716 8.33 72.1416 8.18 72.3616 8.1C72.4616 8.04 72.5716 7.99 72.6916 7.95C72.8116 7.89 72.9116 7.84 72.9916 7.8C73.2116 7.68 73.4416 7.65 73.6816 7.71C73.9216 7.75 74.0916 7.88 74.1916 8.1C74.2116 8.12 74.2316 8.14 74.2516 8.16C74.2716 8.18 74.2916 8.21 74.3116 8.25C74.5716 8.61 74.6716 9.04 74.6116 9.54Z" fill="#343434"/>
                <path d="M99.4816 2.88C99.5816 3.04 99.5916 3.22 99.5116 3.42C99.4516 3.6 99.3216 3.73 99.1216 3.81C98.8816 3.89 98.6016 3.93 98.2816 3.93C97.9816 3.93 97.6416 3.94 97.2616 3.96C97.0416 3.96 96.8316 4 96.6316 4.08C96.4316 4.16 96.2516 4.21 96.0916 4.23C95.7116 4.25 95.4116 4.2 95.1916 4.08C94.9716 3.96 94.7016 3.97 94.3816 4.11C94.3016 4.17 94.2016 4.26 94.0816 4.38C93.9816 4.48 93.8816 4.57 93.7816 4.65C93.5216 4.81 93.3516 5.02 93.2716 5.28C93.1716 5.62 93.2416 5.89 93.4816 6.09C93.6416 6.27 93.8016 6.44 93.9616 6.6C94.1416 6.76 94.3016 6.93 94.4416 7.11C94.5616 7.27 94.7016 7.36 94.8616 7.38C94.9416 7.38 95.0516 7.43 95.1916 7.53C95.4916 7.79 95.8116 8.05 96.1516 8.31C96.4916 8.57 96.7616 8.85 96.9616 9.15C97.0016 9.19 97.0416 9.25 97.0816 9.33C97.1416 9.39 97.2016 9.44 97.2616 9.48C97.6816 9.86 97.9616 10.37 98.1016 11.01C98.2616 11.65 98.2616 12.3 98.1016 12.96C97.9416 13.6 97.6016 14.15 97.0816 14.61C96.8816 14.81 96.6716 15.02 96.4516 15.24C96.2316 15.44 95.9616 15.59 95.6416 15.69C95.6216 15.71 95.5816 15.71 95.5216 15.69C95.4616 15.67 95.4116 15.66 95.3716 15.66C94.9716 15.74 94.5816 15.85 94.2016 15.99C93.8216 16.13 93.3816 16.19 92.8816 16.17C92.6616 16.17 92.4416 16.15 92.2216 16.11C92.0016 16.07 91.7716 16.03 91.5316 15.99C91.1916 15.97 90.9016 15.84 90.6616 15.6C90.6416 15.56 90.6216 15.54 90.6016 15.54C90.5816 15.54 90.5616 15.53 90.5416 15.51C90.4016 15.41 90.2816 15.3 90.1816 15.18C90.1016 15.06 90.0316 14.93 89.9716 14.79C89.9316 14.63 89.8716 14.48 89.7916 14.34C89.7116 14.18 89.6616 14.01 89.6416 13.83C89.6216 13.63 89.6916 13.49 89.8516 13.41C90.0316 13.33 90.1916 13.34 90.3316 13.44C90.5516 13.62 90.7816 13.71 91.0216 13.71C91.8416 13.83 92.5716 13.8 93.2116 13.62C93.8716 13.42 94.4716 13.11 95.0116 12.69C95.1916 12.55 95.3416 12.35 95.4616 12.09C95.5016 12.01 95.5416 11.95 95.5816 11.91C95.6216 11.85 95.6516 11.79 95.6716 11.73C95.8116 11.55 95.9016 11.36 95.9416 11.16C96.0416 10.78 95.9516 10.44 95.6716 10.14C95.2916 9.74 94.8516 9.4 94.3516 9.12C93.8516 8.84 93.3416 8.55 92.8216 8.25C92.6216 8.13 92.4416 7.95 92.2816 7.71C92.1616 7.55 92.0416 7.39 91.9216 7.23C91.8216 7.05 91.7016 6.87 91.5616 6.69C91.3616 6.49 91.2316 6.26 91.1716 6C91.0516 5.42 90.9616 4.87 90.9016 4.35C90.8616 3.83 90.9716 3.34 91.2316 2.88C91.3516 2.6 91.5716 2.31 91.8916 2.01C92.2316 1.69 92.5316 1.47 92.7916 1.35C93.0516 1.19 93.4716 1.07 94.0516 0.99C94.6516 0.890001 95.2716 0.840001 95.9116 0.840001C96.5716 0.840001 97.1116 0.929999 97.5316 1.11C97.6916 1.19 97.8516 1.28 98.0116 1.38C98.1716 1.48 98.3216 1.57 98.4616 1.65C98.7816 1.79 99.0416 2.05 99.2416 2.43C99.2616 2.51 99.2916 2.59 99.3316 2.67C99.3916 2.73 99.4416 2.8 99.4816 2.88Z" fill="#343434"/>
                <path d="M119.737 4.14C119.377 5.26 119.057 6.37 118.777 7.47C118.517 8.57 118.207 9.65 117.847 10.71C117.827 10.79 117.807 10.87 117.787 10.95C117.787 11.01 117.787 11.09 117.787 11.19C117.767 11.71 117.687 12.21 117.547 12.69C117.427 13.17 117.327 13.7 117.247 14.28C117.247 14.36 117.207 14.4 117.127 14.4C117.067 14.4 117.047 14.43 117.067 14.49C117.107 14.91 117.087 15.3 117.007 15.66C116.927 16 116.867 16.19 116.827 16.23C116.787 16.23 116.767 16.26 116.767 16.32C116.627 16.48 116.457 16.55 116.257 16.53C116.077 16.53 115.887 16.49 115.687 16.41C115.267 16.27 114.977 16 114.817 15.6C114.757 15.46 114.697 15.33 114.637 15.21C114.577 15.09 114.527 14.99 114.487 14.91C114.247 14.55 114.177 14.15 114.277 13.71C114.777 11.63 115.317 9.46 115.897 7.2C116.497 4.92 117.197 2.75 117.997 0.690001C118.037 0.57 118.117 0.489999 118.237 0.45C118.377 0.389999 118.507 0.389999 118.627 0.45C118.787 0.549999 118.927 0.67 119.047 0.81C119.227 1.07 119.417 1.35 119.617 1.65C119.837 1.95 119.977 2.26 120.037 2.58C120.097 2.88 119.997 3.2 119.737 3.54C119.637 3.68 119.637 3.78 119.737 3.84C119.777 3.94 119.777 4.04 119.737 4.14ZM109.147 2.7C109.127 2.78 109.117 2.86 109.117 2.94C109.117 3 109.117 3.07 109.117 3.15V3.21C108.677 4.55 108.267 5.92 107.887 7.32C107.507 8.7 107.107 10.04 106.687 11.34C106.627 11.46 106.597 11.58 106.597 11.7C106.517 12.32 106.397 13.03 106.237 13.83C106.097 14.61 105.917 15.31 105.697 15.93C105.617 16.13 105.487 16.28 105.307 16.38C105.127 16.48 104.937 16.52 104.737 16.5C104.477 16.44 104.257 16.34 104.077 16.2C103.917 16.06 103.757 15.91 103.597 15.75C103.297 15.39 103.147 14.99 103.147 14.55C103.167 14.27 103.217 13.98 103.297 13.68C103.377 13.36 103.437 13.01 103.477 12.63C103.617 11.83 103.797 10.96 104.017 10.02C104.257 9.06 104.507 8.11 104.767 7.17C105.027 6.21 105.287 5.33 105.547 4.53C105.747 3.89 105.947 3.29 106.147 2.73C106.367 2.17 106.567 1.62 106.747 1.08C106.807 0.92 106.927 0.8 107.107 0.72C107.287 0.62 107.457 0.610001 107.617 0.690001C107.917 0.830001 108.177 0.999999 108.397 1.2C108.617 1.4 108.817 1.63 108.997 1.89C109.177 2.13 109.227 2.4 109.147 2.7ZM114.667 7.71C114.767 7.87 114.787 8.04 114.727 8.22C114.667 8.4 114.557 8.53 114.397 8.61C113.217 9.15 112.027 9.33 110.827 9.15C110.447 9.05 110.127 8.87 109.867 8.61C109.727 8.47 109.577 8.36 109.417 8.28C109.257 8.18 109.107 8.07 108.967 7.95C108.807 7.79 108.747 7.61 108.787 7.41C108.847 7.21 108.977 7.09 109.177 7.05C109.837 6.87 110.537 6.75 111.277 6.69C112.037 6.61 112.717 6.63 113.317 6.75C113.637 6.79 113.897 6.91 114.097 7.11C114.317 7.29 114.507 7.49 114.667 7.71Z" fill="#343434"/>
                <path d="M138.806 5.43C139.006 7.11 138.876 8.56 138.416 9.78C137.976 11 137.336 12.06 136.496 12.96C135.656 13.86 134.726 14.69 133.706 15.45C133.626 15.49 133.536 15.54 133.436 15.6C133.336 15.64 133.226 15.67 133.106 15.69C132.126 15.95 131.256 16.15 130.496 16.29C129.756 16.43 128.946 16.46 128.066 16.38C127.766 16.38 127.516 16.31 127.316 16.17C126.916 15.91 126.516 15.69 126.116 15.51C125.736 15.33 125.386 15.03 125.066 14.61C124.626 14.05 124.326 13.48 124.166 12.9C124.026 12.32 123.856 11.69 123.656 11.01C123.636 10.91 123.626 10.82 123.626 10.74C123.626 10.66 123.626 10.58 123.626 10.5C123.646 10.16 123.656 9.84 123.656 9.54C123.656 9.22 123.696 8.84 123.776 8.4C123.856 7.96 124.026 7.42 124.286 6.78C124.546 6.14 124.806 5.59 125.066 5.13C125.366 4.57 125.746 3.97 126.206 3.33C126.666 2.67 127.176 2.09 127.736 1.59C128.296 1.09 128.886 0.77 129.506 0.63C130.126 0.49 130.746 0.649999 131.366 1.11C131.586 1.27 131.696 1.5 131.696 1.8C131.696 2.04 131.616 2.26 131.456 2.46C131.436 2.48 131.416 2.51 131.396 2.55C131.396 2.57 131.386 2.59 131.366 2.61C131.266 2.77 131.116 2.93 130.916 3.09C129.896 3.83 129.016 4.79 128.276 5.97C127.536 7.13 127.016 8.37 126.716 9.69C126.636 10.03 126.576 10.46 126.536 10.98C126.496 11.48 126.516 12.02 126.596 12.6C126.616 12.72 126.636 12.83 126.656 12.93C126.676 13.03 126.716 13.13 126.776 13.23C126.956 13.63 127.256 13.85 127.676 13.89C128.056 13.95 128.426 13.98 128.786 13.98C129.146 13.96 129.536 13.91 129.956 13.83C130.096 13.79 130.226 13.72 130.346 13.62C130.486 13.52 130.626 13.44 130.766 13.38C130.866 13.34 130.966 13.34 131.066 13.38C131.166 13.4 131.266 13.4 131.366 13.38C132.066 13.14 132.716 12.72 133.316 12.12C133.916 11.52 134.426 10.83 134.846 10.05C135.286 9.27 135.606 8.48 135.806 7.68C136.006 6.88 136.046 6.15 135.926 5.49C135.826 4.93 135.646 4.48 135.386 4.14C135.146 3.78 134.836 3.43 134.456 3.09C134.356 3.01 134.246 2.94 134.126 2.88C134.006 2.82 133.886 2.78 133.766 2.76C133.646 2.74 133.526 2.67 133.406 2.55C133.306 2.37 133.296 2.19 133.376 2.01C133.476 1.81 133.636 1.7 133.856 1.68C134.136 1.68 134.406 1.69 134.666 1.71C134.946 1.71 135.196 1.72 135.416 1.74C135.536 1.76 135.656 1.79 135.776 1.83C135.896 1.87 136.006 1.92 136.106 1.98C136.246 2.06 136.366 2.14 136.466 2.22C136.586 2.3 136.736 2.37 136.916 2.43C137.076 2.47 137.236 2.58 137.396 2.76C137.736 3.06 137.986 3.39 138.146 3.75C138.326 4.11 138.516 4.53 138.716 5.01C138.776 5.13 138.806 5.27 138.806 5.43Z" fill="#343434"/>
                <path d="M156.623 4.14V4.38C156.563 4.52 156.533 4.69 156.533 4.89C156.513 4.99 156.493 5.09 156.473 5.19C156.453 5.29 156.423 5.38 156.383 5.46C156.243 5.66 156.163 5.86 156.143 6.06C156.123 6.48 155.993 6.86 155.753 7.2C155.513 7.52 155.303 7.85 155.123 8.19C155.063 8.33 154.983 8.43 154.883 8.49C154.743 8.57 154.643 8.66 154.583 8.76C154.143 9.38 153.533 9.89 152.753 10.29C151.993 10.69 151.173 10.94 150.293 11.04C149.953 11.1 149.603 11.03 149.243 10.83C149.163 10.75 149.073 10.67 148.973 10.59C148.893 10.49 148.823 10.39 148.763 10.29C148.723 10.25 148.693 10.21 148.673 10.17C148.653 10.11 148.623 10.07 148.583 10.05C148.443 9.91 148.383 9.75 148.403 9.57C148.443 9.37 148.553 9.23 148.733 9.15C149.333 8.81 149.953 8.48 150.593 8.16C151.233 7.84 151.783 7.43 152.243 6.93C152.703 6.41 153.083 5.89 153.383 5.37C153.683 4.83 153.663 4.19 153.323 3.45C153.243 3.29 153.153 3.15 153.053 3.03C152.973 2.91 152.863 2.81 152.723 2.73C152.283 2.39 151.803 2.16 151.283 2.04C150.783 1.9 150.333 1.78 149.933 1.68C149.813 1.66 149.713 1.61 149.633 1.53C149.573 1.43 149.523 1.34 149.483 1.26C149.443 1.16 149.443 1.05 149.483 0.930001C149.543 0.81 149.623 0.730001 149.723 0.690001C150.103 0.57 150.673 0.53 151.433 0.57C152.193 0.59 152.993 0.71 153.833 0.930001C154.673 1.15 155.393 1.51 155.993 2.01C155.993 2.03 156.003 2.04 156.023 2.04C156.063 2.16 156.093 2.28 156.113 2.4C156.153 2.5 156.213 2.6 156.293 2.7C156.453 2.92 156.553 3.13 156.593 3.33C156.653 3.53 156.663 3.8 156.623 4.14ZM148.643 4.35C148.563 4.65 148.443 4.95 148.283 5.25C148.143 5.53 148.003 5.84 147.863 6.18C147.743 6.5 147.673 6.86 147.653 7.26C147.633 7.64 147.573 7.98 147.473 8.28C147.353 8.6 147.223 8.94 147.083 9.3C146.943 9.66 146.803 10.09 146.663 10.59C146.603 10.81 146.533 11.04 146.453 11.28C146.393 11.5 146.333 11.72 146.273 11.94C146.153 12.36 146.033 12.75 145.913 13.11C145.813 13.47 145.683 13.81 145.523 14.13C145.483 14.23 145.443 14.34 145.403 14.46C145.363 14.58 145.343 14.71 145.343 14.85C145.343 15.11 145.273 15.38 145.133 15.66C145.013 15.92 144.863 16.16 144.683 16.38C144.363 16.76 143.973 16.85 143.513 16.65C143.373 16.57 143.243 16.47 143.123 16.35C143.023 16.25 142.923 16.15 142.823 16.05C142.563 15.65 142.463 15.23 142.523 14.79C142.703 13.69 142.913 12.66 143.153 11.7C143.393 10.72 143.673 9.74 143.993 8.76C144.373 7.64 144.713 6.5 145.013 5.34C145.313 4.16 145.753 3.14 146.333 2.28C146.433 2.12 146.583 2.02 146.783 1.98C146.983 1.92 147.163 1.94 147.323 2.04C147.543 2.18 147.733 2.35 147.893 2.55C148.073 2.73 148.233 2.91 148.373 3.09C148.673 3.49 148.763 3.91 148.643 4.35Z" fill="#343434"/>
            </svg>
        </div>
        @auth
            <div class="hyuman_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26" fill="none">
                    <path d="M26.8469 24.3838C24.8719 20.9693 21.8282 18.5209 18.2762 17.3602C20.0332 16.3143 21.3983 14.7205 22.1618 12.8237C22.9253 10.9268 23.045 8.8318 22.5026 6.86031C21.9602 4.88881 20.7857 3.14988 19.1593 1.91054C17.533 0.671206 15.5447 0 13.5 0C11.4553 0 9.46704 0.671206 7.84069 1.91054C6.21433 3.14988 5.03976 4.88881 4.49736 6.86031C3.95496 8.8318 4.07471 10.9268 4.83823 12.8237C5.60174 14.7205 6.96681 16.3143 8.72379 17.3602C5.17179 18.5196 2.12814 20.968 0.153073 24.3838C0.0806434 24.5019 0.0326017 24.6334 0.0117819 24.7703C-0.0090379 24.9073 -0.00221403 25.047 0.0318509 25.1813C0.0659158 25.3156 0.126532 25.4417 0.210122 25.5522C0.293713 25.6627 0.398585 25.7553 0.51855 25.8246C0.638516 25.8939 0.771145 25.9385 0.908613 25.9557C1.04608 25.9729 1.1856 25.9624 1.31895 25.9248C1.45229 25.8872 1.57675 25.8233 1.685 25.7368C1.79324 25.6503 1.88306 25.5431 1.94918 25.4213C4.3924 21.1988 8.71082 18.6778 13.5 18.6778C18.2892 18.6778 22.6076 21.1988 25.0508 25.4213C25.1169 25.5431 25.2068 25.6503 25.315 25.7368C25.4232 25.8233 25.5477 25.8872 25.6811 25.9248C25.8144 25.9624 25.9539 25.9729 26.0914 25.9557C26.2289 25.9385 26.3615 25.8939 26.4814 25.8246C26.6014 25.7553 26.7063 25.6627 26.7899 25.5522C26.8735 25.4417 26.9341 25.3156 26.9681 25.1813C27.0022 25.047 27.009 24.9073 26.9882 24.7703C26.9674 24.6334 26.9194 24.5019 26.8469 24.3838ZM6.23778 9.34067C6.23778 7.90434 6.6637 6.50026 7.46168 5.306C8.25967 4.11173 9.39387 3.18091 10.7209 2.63125C12.0479 2.08159 13.5081 1.93778 14.9168 2.21799C16.3255 2.4982 17.6195 3.18986 18.6352 4.2055C19.6508 5.22114 20.3425 6.51515 20.6227 7.92388C20.9029 9.33261 20.7591 10.7928 20.2094 12.1198C19.6598 13.4468 18.7289 14.581 17.5347 15.379C16.3404 16.177 14.9363 16.6029 13.5 16.6029C11.5746 16.6008 9.72859 15.835 8.36711 14.4736C7.00562 13.1121 6.23984 11.2661 6.23778 9.34067Z" fill="black"/>
                </svg>
            </div>
            <div class="user_name">{{ auth()->user()->user_name }}</div>
            <div class="user_saffix"> さん</div>
            <form method="GET" action="{{ route('orders') }}">
                @csrf
                <button class="order_status_button" type="submit">注文履歴</button>
            </form>
            <form method="POST" action="{{ route('regist.logout') }}">
                @csrf
                <button class="logout_button" type="submit">ログアウト</button>
            </form>
        @else
            <form method="GET" action="{{ route('regist') }}">
                @csrf
                <button class="regist_button" type="submit">新規登録</button>
            </form>
            <form method="GET" action="{{ route('login') }}">
                @csrf
                <button class="login_button" type="submit">ログイン</button>
            </form>
        @endauth
        <form method="GET" action="{{ route('cart') }}">
            @csrf
            <button class="cart_icon" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                    <path d="M26.7675 5.35875C26.6736 5.24642 26.5562 5.15607 26.4236 5.09408C26.291 5.03209 26.1464 4.99998 26 5H5.835L5.22375 1.6425C5.14003 1.18167 4.89723 0.764838 4.53767 0.464677C4.17812 0.164517 3.72462 6.7693e-05 3.25625 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2H3.25L6.445 19.5362C6.53911 20.0563 6.76895 20.5423 7.11125 20.945C6.63881 21.3863 6.29781 21.9498 6.12607 22.573C5.95433 23.1962 5.95856 23.8549 6.13829 24.4759C6.31801 25.0968 6.66622 25.6559 7.14428 26.0911C7.62235 26.5263 8.2116 26.8205 8.8467 26.9412C9.48179 27.062 10.1379 27.0044 10.7423 26.775C11.3467 26.5456 11.8758 26.1533 12.2708 25.6416C12.6658 25.1299 12.9114 24.5187 12.9804 23.8759C13.0493 23.2332 12.9388 22.5838 12.6613 22H18.3388C18.115 22.4684 17.9993 22.981 18 23.5C18 24.1922 18.2053 24.8689 18.5899 25.4445C18.9744 26.0201 19.5211 26.4687 20.1606 26.7336C20.8001 26.9985 21.5039 27.0678 22.1828 26.9327C22.8617 26.7977 23.4854 26.4644 23.9749 25.9749C24.4644 25.4854 24.7977 24.8617 24.9327 24.1828C25.0678 23.5039 24.9985 22.8001 24.7336 22.1606C24.4687 21.5211 24.0201 20.9744 23.4445 20.5899C22.8689 20.2053 22.1922 20 21.5 20H9.39625C9.16206 20 8.93532 19.9177 8.75554 19.7677C8.57576 19.6176 8.45436 19.4092 8.4125 19.1787L8.01625 17H22.5163C23.2188 16.9999 23.8991 16.7532 24.4384 16.303C24.9777 15.8527 25.3419 15.2275 25.4675 14.5362L26.9875 6.17875C27.0132 6.0343 27.0069 5.88596 26.9688 5.74424C26.9308 5.60253 26.8621 5.47092 26.7675 5.35875ZM11 23.5C11 23.7967 10.912 24.0867 10.7472 24.3334C10.5824 24.58 10.3481 24.7723 10.074 24.8858C9.79994 24.9993 9.49834 25.0291 9.20736 24.9712C8.91639 24.9133 8.64912 24.7704 8.43934 24.5607C8.22956 24.3509 8.0867 24.0836 8.02882 23.7926C7.97094 23.5017 8.00065 23.2001 8.11418 22.926C8.22771 22.6519 8.41997 22.4176 8.66665 22.2528C8.91332 22.088 9.20333 22 9.5 22C9.89782 22 10.2794 22.158 10.5607 22.4393C10.842 22.7206 11 23.1022 11 23.5ZM23 23.5C23 23.7967 22.912 24.0867 22.7472 24.3334C22.5824 24.58 22.3481 24.7723 22.074 24.8858C21.7999 24.9993 21.4983 25.0291 21.2074 24.9712C20.9164 24.9133 20.6491 24.7704 20.4393 24.5607C20.2296 24.3509 20.0867 24.0836 20.0288 23.7926C19.9709 23.5017 20.0007 23.2001 20.1142 22.926C20.2277 22.6519 20.42 22.4176 20.6666 22.2528C20.9133 22.088 21.2033 22 21.5 22C21.8978 22 22.2794 22.158 22.5607 22.4393C22.842 22.7206 23 23.1022 23 23.5ZM23.5 14.1787C23.458 14.4098 23.3361 14.6187 23.1555 14.7689C22.975 14.919 22.7473 15.0008 22.5125 15H7.6525L6.19875 7H24.8013L23.5 14.1787Z" fill="#343434"/>
                </svg>
            </button>
        </form>
    </div>
    <div class="header_sub_container">
        <div class="first_category">フルーツ</div>
        <div class="second_category">スイーツ</div>
        <div class="second_category">飲み物</div>
        <div class="second_category">食器</div>
        <div class="second_category">インテリア</div>
    </div>
</head>
<body>
    @yield('content')
</body>
</html>