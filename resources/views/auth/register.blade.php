@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-[50%] h-[100vh] flex flex-col justify-end items-center text-center shadow bg-sky-50 " id="bruh">
        <h1 class="w-[20em] translate-y-[-3em] font-bold">Log in untuk nikmati semua keuntungannya!</h1>
        <p class="w-[20em] translate-y-[-6em]">Login cukup dengan memasukkan email</p>
        <div class="flex items-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="" height="350" viewBox="0 0 731.67 435.03" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="m79.48,306.79c-3.16.34-6.61.85-10.28,1.6-15.55,3.17-15.88,13.73-15.74,16.15l-.11-.07c-1.56,2.51-2.54,5.05-3.14,7.44l-.71-32.37c.46-.96.88-2.05,1.23-3.16,1.16,3.59,3.07,6.97,4.72,6.75,2.14-.29,3.07-6.59,2.67-11.06,2.72,3.5,7.3,7.25,9.03,6.09,1.38-.92.56-4.72-.94-8.18,3.14,1.89,6.62,3.13,7.7,1.93,1.47-1.64-2.06-7.23-5.31-10.35,4.35.41,9.89-.29,10.26-2.27.3-1.63-3-3.69-6.53-5.02,3.54-.93,6.86-2.56,6.75-4.17-.13-1.91-5.05-3.2-9.3-3.39,3.2-2.5,6.14-5.97,5.24-7.53-.83-1.44-4.67-.88-8.22.39,2.1-3,3.58-6.39,2.45-7.55-1.4-1.44-6.37,1.05-9.77,3.8.66-4.29.33-9.7-1.6-10.19-1.61-.41-3.89,2.74-5.45,6.17-.69-3.6-2.09-7.02-3.7-7.02-2.3,0-4.16,6.93-4.16,11.45,0,.26,0,.5.02.73-.23-.27-.5-.55-.8-.84-3.24-3.15-9.51-6.64-11.12-4.99-1.12,1.16.35,4.54,2.45,7.55-3.55-1.27-7.4-1.83-8.22-.39-1.11,1.93,3.64,6.76,7.5,9.1-.23-.03-.48-.05-.74-.07-4.51-.31-11.55,1.08-11.71,3.37-.11,1.61,3.2,3.24,6.75,4.17-3.53,1.33-6.82,3.39-6.53,5.02.36,1.98,5.9,2.68,10.26,2.27-3.25,3.12-6.78,8.71-5.31,10.35,1.08,1.2,4.56-.04,7.7-1.93-1.51,3.46-2.32,7.26-.94,8.18,1.82,1.22,6.83-3.03,9.46-6.68-.27,4.47.8,10.61,2.92,10.85.89.1,1.83-.85,2.68-2.3l-2.4,34.79c-.56,4.05,3.03,6.7,3.35,8.36l.52,23.56c-.59-1.68-1.37-3.4-2.44-5.1l-.11.07c.14-2.42-.19-12.98-15.74-16.15-3.67-.75-7.12-1.26-10.28-1.6-3.73-.4-5.19,4.71-1.82,6.36,4.88,2.39,9.47,5.4,11.87,8.96,6.12,9.11,14.57,3.85,15.78,3.03,1.34,2.24,2.22,4.49,2.78,6.63l.28,12.51c-.07.3-.11.46-.12.47l.13.04.67,30.28,6.18-.05-2.21-30.95c.37-1.67,1.51-7.36,0-13.26l-2.21-24.32h0s.13.64,0,0l-2.88-9.56c.42-2.96,1.39-6.28,3.37-9.57,1.2.82,9.66,6.09,15.78-3.03,2.39-3.56,6.99-6.57,11.87-8.96,3.37-1.65,1.92-6.76-1.82-6.36h0Zm-28.23,71.64l-.12-5.3c.23,2,.22,3.81.12,5.3Z" fill="#f2f2f2"/><path d="m0,414.29c0,.66.53,1.19,1.19,1.19h729.29c.66,0,1.19-.53,1.19-1.19s-.53-1.19-1.19-1.19H1.19c-.66,0-1.19.53-1.19,1.19Z" fill="#3f3d56"/><g><circle cx="442.58" cy="361.34" r="54" fill="#3f3d56"/><circle cx="442.58" cy="361.34" r="36" fill="#fff"/><circle cx="442.58" cy="361.34" r="20.5" fill="#3f3d56"/><circle cx="130.58" cy="361.34" r="54" fill="#3f3d56"/><circle cx="130.58" cy="361.34" r="36" fill="#fff"/><path d="m516.45,335.66c-7.03-17.73-31.61-71.9-75.39-89.83-.34-.14-.69-.23-1.05-.28l-140.41-20.11c-2.31-.33-4.47,1.25-4.84,3.56l-2.46,15.2c-.17,1.04.05,2.11.62,3,7.13,11.06,52.83,86.15-20.35,86.15s-93.35-52.37-96.55-61.62c-.3-.87-.31-1.81-.04-2.69l22.18-70.25c.39-1.25.18-2.53-.46-3.55l9.75-18.11,17.86,10.11,9.25.11,31.57,16.5,6.43-10.5-65.11-32.48s.11-7.52-20.89-13.52l-33-15-4,5,10,8,1,6,7,2,14,27-4,7.74,4.86,2.37-1.39-.32c-2.01-.46-4.06.58-4.88,2.47l-22.06,50.56c-.34.77-.9,1.43-1.61,1.89l-7.86,5.07c-.73.47-1.31,1.16-1.64,1.97l-8.98,21.77c-.28.68-.36,1.39-.29,2.08-11.19,2.12-44.08,11.28-62.15,47.41l21,17s32.92-21.3,87.32.88c9.46,14.72,23.25,26.93,43.17,28.08,52.51,3.04,139.51,6.04,149.51-5.96,7.32-8.79,12.41-14.27,14.62-16.58.78-.81,1.84-1.28,2.96-1.32l122.45-3.91c2.97-.09,4.94-3.11,3.85-5.87Z" fill="#0369a1"/><circle cx="178.58" cy="162.34" r="16" fill="#3f3d56"/><path d="m434.81,245.9c-.19,0-.38,0-.57-.01l-133.78-5.18c-5.92-.23-10.99-4-12.92-9.6l-1.83-5.33c-1.49-4.34-.84-9,1.78-12.77,2.63-3.77,6.77-5.99,11.36-6.1l138.22-3.18c4.28-.1,8.4,1.73,11.19,5.03,2.79,3.3,3.93,7.62,3.12,11.87l-2.61,13.68c-1.29,6.79-7.12,11.58-13.97,11.58Z" fill="#3f3d56"/><circle cx="130.58" cy="361.34" r="20.5" fill="#3f3d56"/><path d="m488.56,302.98c-3.2,0-6.25-1.71-7.88-4.66l-10.13-18.34c-1.61-2.91-1.51-6.32.25-9.13,1.76-2.82,4.8-4.4,8.1-4.22l18.39.94c3.42.18,6.5,2.33,7.84,5.49l5.37,12.7c.98,2.33.96,4.87-.07,7.18-1.03,2.3-2.91,4.03-5.29,4.85l-13.62,4.7c-.97.34-1.97.5-2.95.5Z" fill="#3f3d56"/><path d="m256.01,424.87c-.15,0-.31,0-.46-.03l-4.08-.45c-1.33-.15-2.49-.9-3.17-2.06-.68-1.16-.77-2.53-.25-3.77l21.24-50.44.46.19-.46-.19c.58-1.38,1.87-2.36,3.36-2.55,1.45-.18,2.86.39,3.79,1.52.92,1.13,1.2,2.63.73,4.01l-17.15,50.89c-.58,1.72-2.22,2.87-4,2.87Z" fill="#3f3d56"/></g><path d="m366.28,72.88s-7.77-15.54-6.22-29.52l-25.86,13.4,1,25.44,31.08-9.32h0Z" fill="#a0616a"/><circle cx="350.23" cy="40.61" r="23.33" fill="#a0616a"/><g><polygon points="374.06 406.93 359.82 406.93 353.05 352.02 374.06 352.02 374.06 406.93" fill="#a0616a"/><path d="m325.29,406.6h0c-.44.75-.68,3.16-.68,4.02h0c0,2.67,2.16,4.83,4.83,4.83h44.08c1.82,0,3.3-1.48,3.3-3.3v-1.84s2.18-5.52-2.31-12.31c0,0-5.58,5.32-13.92-3.01l-2.46-4.45-17.8,13.02-9.87,1.21c-2.16.27-4.07-.04-5.18,1.83h0,0Z" fill="#2f2e41"/></g><path d="m332.09,72.88l34.19-4.66,26.42,12.43,1.55,96.34s-64.98,7.77-75.22-2.33c-10.24-10.1-2.47-90.9-2.47-90.9l15.54-10.88s0,0,0,0Z" fill="#e6e6e6"/><path d="m344.39,46.55h-6.27s-5.44-6.7-4.71-2.62c.73,4.08-2.2,8.47-2.2,8.47l-4.39-1.46s-8.78-36.93,17.57-38.96,32.21,18.47,32.21,18.47c0,0-1.46,10.25-4.39,7.32s-19.03-4.39-19.03-4.39l-8.78,13.18s0,0,0,0Z" fill="#2f2e41"/><g><polygon points="327.8 394.59 314.11 398.45 292.67 347.46 312.89 341.75 327.8 394.59" fill="#a0616a"/><path d="m280.78,407.53h0c-.22.84.21,3.22.44,4.06h0c.72,2.57,3.39,4.06,5.96,3.34l42.42-11.98c1.75-.49,2.77-2.32,2.28-4.07l-.5-1.77s.6-5.9-5.57-11.22c0,0-3.92,6.64-14.21.88l-3.58-3.62-13.59,17.36-9.16,3.85c-2,.84-3.93,1.07-4.49,3.17h0s0,0,0,0h0Z" fill="#2f2e41"/></g><path d="m389.58,167.67l4.66,14.1v48.45l-13.99,146.24h-27.32l-3.08-104.39,2.43-51.56-52.11,78.84,22.9,56.31-25.21,16.81s-37.7-85.91-32.06-94.24c5.64-8.32,56.16-106.59,56.16-106.59,0,0,67.6-2.41,67.6-3.96h0s0,0,0,0Z" fill="#2f2e41"/><g><path d="m403.57,111.73l7.51,12.3s10.62,41.74,0,41.91-32.06-21.27-32.06-21.27l2.8-11.19,7.77,3.11-1.55-24.86h15.54s0,0,0,0Z" fill="#a0616a"/><path d="m380.26,80.46s24.86-4.38,27.19,11.89c2.33,16.27,3.63,31.69,3.63,31.69l-26.94,2.23-3.88-45.81s0,0,0,0Z" fill="#e6e6e6"/><ellipse cx="374.23" cy="135.17" rx="7.02" ry="14.03" transform="translate(47.03 361.57) rotate(-54.54)" fill="#a0616a"/></g><path d="m590.48,306.79c-3.16.34-6.61.85-10.28,1.6-15.55,3.17-15.88,13.73-15.74,16.15l-.11-.07c-1.56,2.51-2.54,5.05-3.14,7.44l-.71-32.37c.46-.96.88-2.05,1.23-3.16,1.16,3.59,3.07,6.97,4.72,6.75,2.14-.29,3.07-6.59,2.67-11.06,2.72,3.5,7.3,7.25,9.03,6.09,1.38-.92.56-4.72-.94-8.18,3.14,1.89,6.62,3.13,7.7,1.93,1.47-1.64-2.06-7.23-5.31-10.35,4.35.41,9.89-.29,10.26-2.27.3-1.63-3-3.69-6.53-5.02,3.54-.93,6.86-2.56,6.75-4.17-.13-1.91-5.05-3.2-9.3-3.39,3.2-2.5,6.14-5.97,5.24-7.53-.83-1.44-4.67-.88-8.22.39,2.1-3,3.58-6.39,2.45-7.55-1.4-1.44-6.37,1.05-9.77,3.8.66-4.29.33-9.7-1.6-10.19-1.61-.41-3.89,2.74-5.45,6.17-.69-3.6-2.09-7.02-3.7-7.02-2.3,0-4.16,6.93-4.16,11.45,0,.26,0,.5.02.73-.23-.27-.5-.55-.8-.84-3.24-3.15-9.51-6.64-11.12-4.99-1.12,1.16.35,4.54,2.45,7.55-3.55-1.27-7.4-1.83-8.22-.39-1.11,1.93,3.64,6.76,7.5,9.1-.23-.03-.48-.05-.74-.07-4.51-.31-11.55,1.08-11.71,3.37-.11,1.61,3.2,3.24,6.75,4.17-3.53,1.33-6.82,3.39-6.53,5.02.36,1.98,5.9,2.68,10.26,2.27-3.25,3.12-6.78,8.71-5.31,10.35,1.08,1.2,4.56-.04,7.7-1.93-1.51,3.46-2.32,7.26-.94,8.18,1.82,1.22,6.83-3.03,9.46-6.68-.27,4.47.8,10.61,2.92,10.85.89.1,1.83-.85,2.68-2.3l-2.4,34.79c-.56,4.05,3.03,6.7,3.35,8.36l.52,23.56c-.59-1.68-1.37-3.4-2.44-5.1l-.11.07c.14-2.42-.19-12.98-15.74-16.15-3.67-.75-7.12-1.26-10.28-1.6-3.73-.4-5.19,4.71-1.82,6.36,4.88,2.39,9.47,5.4,11.87,8.96,6.12,9.11,14.57,3.85,15.78,3.03,1.34,2.24,2.22,4.49,2.78,6.63l.28,12.51c-.07.3-.11.46-.12.47l.13.04.67,30.28,6.18-.05-2.21-30.95c.37-1.67,1.51-7.36,0-13.26l-2.21-24.32h0s.13.64,0,0l-2.88-9.56c.42-2.96,1.39-6.28,3.37-9.57,1.2.82,9.66,6.09,15.78-3.03,2.39-3.56,6.99-6.57,11.87-8.96,3.37-1.65,1.92-6.76-1.82-6.36h0Zm-28.23,71.64l-.12-5.3c.23,2,.22,3.81.12,5.3Z" fill="#f2f2f2"/><g><polygon points="518.51 409.07 529.26 406.75 525.41 364.21 509.56 367.63 518.51 409.07" fill="#a0616a"/><path d="m555.27,400.88h0c.46.49,1.03,2.27,1.17,2.93h0c.44,2.01-.84,4-2.86,4.43l-33.27,7.19c-1.37.3-2.73-.58-3.03-1.95l-.3-1.39s-2.55-3.81-.27-9.67c0,0,5.08,3.11,10.01-4.55l1.13-3.76,15.56,6.92,7.64-.69c1.67-.15,3.07-.7,4.21.54h0s0,0,0,0Z" fill="#2f2e41"/></g><g><polygon points="537.73 405.82 546.69 399.46 526.42 361.86 513.19 371.24 537.73 405.82" fill="#a0616a"/><path d="m568.3,383.82h0c.61.27,1.84,1.68,2.22,2.23h0c1.19,1.68.8,4.01-.88,5.2l-27.76,19.7c-1.15.81-2.73.54-3.55-.6l-.82-1.16s-3.84-2.5-4.05-8.79c0,0,5.89.86,7.42-8.12l-.44-3.9,17.03.24,6.76-3.64c1.48-.8,2.55-1.85,4.08-1.16h0s0,0,0,0Z" fill="#2f2e41"/></g><path d="m408.6,195.47s-16.71,22.72,16.71,48.27l68.25-21.81-24.38-50.84-21.59-11.84-39,36.21h0Z" fill="#2f2e41"/><polyline points="493.57 221.94 520.03 273.47 536.75 380.73 515.86 382.12 494.96 280.44 458.05 225.42 483.82 213.58" fill="#2f2e41"/><path d="m425.32,227.56v16.19l47.36,52.01s0,39,18.11,57.11l20.89,32.04,18.11-9.75-26.46-93.32-47.36-61.29-30.64,7.01h0Z" fill="#2f2e41"/><path d="m458.97,67.07l-8.92,34.01-34.01-6.69s23.73-24.47,20.39-35.62l22.55,8.3h0Z" fill="#a0616a"/><path d="m432.98,72.2l20.89,9.75s10.75,6.57,10.95,10.95-1.2,25.27-1.2,25.27c0,0,8.36,8.36,2.79,25.07l2.79,27.86-62.68,33.43,5.57-58.5-2.79-54.32,23.68-19.5h0Z" fill="#3f3d56"/><g><path id="uuid-a736fb77-ebf6-42b0-8b8a-4fdda1f3d2e9-96" d="m414.23,230.72c2.45,5.61,7.33,8.9,10.9,7.34,3.57-1.56,4.48-7.37,2.04-12.98-.95-2.26-2.42-4.25-4.3-5.82l-10.67-23.65-10.99,5.24,11.68,22.76c-.13,2.44.33,4.88,1.34,7.11h0Z" fill="#a0616a"/><path d="m425.32,95.19s-15.32-9.75-20.89,1.39-18.11,68.25-18.11,68.25l18.11,54.32,16.71-6.96-14.63-58.46,18.8-58.54h0Z" fill="#3f3d56"/></g><g><path id="uuid-58a199b9-e878-46e4-8346-6749f3d4d3cf-97" d="m503.85,221.95c4.34,4.32,10.09,5.58,12.84,2.81s1.45-8.5-2.89-12.82c-1.71-1.75-3.82-3.06-6.14-3.83l-18.63-18.06-8.29,8.92,19.24,16.85c.78,2.32,2.11,4.42,3.87,6.12h0Z" fill="#a0616a"/><path d="m464.23,91.86s-26.71-1.09-27.79,11.32c-1.07,12.41,17.19,67.79,17.19,67.79l36.85,43.83,12.97-12.63-35.13-48.96s-4.08-61.35-4.08-61.35Z" fill="#3f3d56"/></g><g><path d="m386.02,192.42l-22.31-67.73c-18.04-15.89-37.61,22.38-90.14.68l16.52,76.61c39.72-21.47,73.9-29.88,95.93-9.56Z" fill="#fff"/><path d="m290.09,203.98c-.14,0-.29-.03-.42-.09-.29-.13-.49-.39-.56-.7l-16.52-76.61c-.08-.36.05-.74.34-.98.29-.24.68-.3,1.02-.16,29.84,12.32,49.1,4.99,63.17-.37,10.69-4.07,19.13-7.29,27.25-.14.13.12.23.27.29.44l22.31,67.73c.14.43-.03.91-.41,1.15-.38.25-.89.2-1.22-.11-19.36-17.86-49.48-14.78-94.77,9.71-.15.08-.31.12-.48.12Zm-15.15-75.98l15.84,73.47c43.46-23.27,73.23-26.86,93.16-11.13l-21.11-64.07c-7.15-6.12-14.66-3.26-25.01.68-14.1,5.37-33.31,12.69-62.88,1.06h0Z" fill="#3f3d56"/></g><g><path d="m308.17,92.42l-14.12,2.92s-37.74,20.77-30.6,28.64c7.13,7.87,37.44,8.88,37.44,8.88l6.26-9.69-7.58-3.55,19.22-15.85-10.62-11.35h0s0,0,0,0Z" fill="#a0616a"/><path d="m346.93,88.07s-13.79-21.15-27.26-11.73c-13.47,9.42-25.61,19-25.61,19l16.78,21.19,36.1-28.46h0s0,0,0,0Z" fill="#e6e6e6"/><ellipse cx="311.1" cy="129.86" rx="7.02" ry="14.03" transform="translate(122.11 409.02) rotate(-78.56)" fill="#a0616a"/></g><circle cx="585.63" cy="413.5" r="8.44" fill="#3f3d56"/><circle cx="596.88" cy="426.59" r="8.44" fill="#3f3d56"/><circle cx="681.26" cy="426.59" r="8.44" fill="#3f3d56"/><path d="m609.24,300.29v-91.65c0-10.26,8.58-12.8,18.84-12.8,5.03,0,7.47-.58,11,3,3.53,3.58,7.45,5.07,7.37,10.1l-1.48,89.93-35.74,1.41Zm19.84-98.44c-9.16,0-17.84-2.36-17.84,6.8v89.57l31.77-1.26,1.45-88.04c.07-4.49-7.23-3.87-10.37-7.07-3.15-3.2-.51,0-5,0h0Z" fill="#3f3d56"/><path d="m584.12,299.18l-1.28,100.13c-.02,1.29.29,2.56.89,3.7l9.46,17.87c1.39,2.63,4.17,4.22,7.14,4.09l83.06-3.66c4.25-.19,7.54-3.79,7.35-8.04l-5.21-114.33c-.19-4.11-3.57-7.35-7.69-7.35h-86.03c-4.21,0-7.64,3.39-7.7,7.6h0Z" fill="#e6e6e6"/><path d="m616.86,344.37l-2-.1.74-14.82c.4-7.98,6.97-14.38,14.96-14.57l35.37-.82c7.14-.12,13.06,5.29,13.45,12.43l.75,13.55-2,.11-.75-13.55c-.34-6.05-5.39-10.69-11.41-10.54l-35.37.82c-6.95.16-12.66,5.73-13.01,12.67l-.74,14.82Z" fill="#3f3d56"/><path d="m615.45,416.15l-1.99-.2,4.31-42.06c.8-7.78,7.29-13.91,15.1-14.26l34.5-1.55c4.35-.2,8.48,1.34,11.64,4.33,3.16,2.99,4.92,7.03,4.97,11.38l.39,36.62-2,.02-.39-36.62c-.04-3.8-1.58-7.33-4.34-9.95s-6.39-3.96-10.17-3.79l-34.5,1.55c-6.83.31-12.5,5.66-13.2,12.46l-4.31,42.06Z" fill="#3f3d56"/><path d="m599.99,413.24l-2-.03,1.26-96.12c.09-6.57,5.3-11.87,11.87-12.07l68-2,.06,2-68,2c-5.5.16-9.86,4.59-9.93,10.09l-1.26,96.12Z" fill="#3f3d56"/><path d="m600.17,399.55h-1.39v-87.54c0-2.77-2.25-5.03-5.03-5.03h-7.77v-2h7.77c3.67,0,6.69,2.83,7,6.41.02.2.03.41.03.62v41.45l-.61,46.09Z" fill="#3f3d56"/><g><path d="m473.49,48.89c0,12.82-10.39,23.21-23.21,23.21s-23.21-10.39-23.21-23.21,10.39-23.21,23.21-23.21,23.21,10.39,23.21,23.21Z" fill="#a0616a"/><path d="m448.43,17.69c.67.39,1.57-.2,1.79-.95.22-.75-.04-1.54-.28-2.28-.42-1.24-.83-2.47-1.25-3.71-.89-2.63-1.83-5.35-3.75-7.35-2.9-3.02-7.52-3.79-11.67-3.23-5.33.72-10.59,3.6-13.07,8.38-2.48,4.78-1.42,11.44,3.06,14.42-6.39,7.32-8.61,15.48-8.26,25.18.35,9.71,10.93,18.64,17.83,25.48,1.54-.93,2.94-5.31,2.09-6.9-.85-1.59.37-3.43-.68-4.9-1.05-1.46-1.93.87-.87-.59.67-.92-1.94-3.03-.95-3.58,4.81-2.66,6.41-8.66,9.43-13.25,3.65-5.54,9.88-9.29,16.49-9.91,3.64-.34,7.48.28,10.46,2.39,2.98,2.11,4.91,5.88,4.22,9.47,1.79-1.82,2.68-4.48,2.35-7.01-.34-2.53-1.89-4.87-4.1-6.16,1.34-4.43.19-9.53-2.92-12.95-3.11-3.43-15.72-2.84-20.26-1.94l.35-.6s0,0,0,0Z" fill="#2f2e41"/><path d="m447.73,34.63c-6.01.65-10.35,5.86-14.02,10.67-2.11,2.77-4.33,5.83-4.27,9.32.05,3.52,2.41,6.55,3.54,9.88,1.84,5.46.05,11.95-4.33,15.69,4.33.82,9.01-2.42,9.75-6.77.87-5.05-2.96-9.93-2.51-15.04.4-4.5,3.95-7.96,6.96-11.33,3.02-3.37,5.85-7.83,4.46-12.13,0,0,.42-.29.42-.29Z" fill="#2f2e41"/></g></svg>
        </div>
    </div>
    <div class="w-[50%]  bg-white rounded-3xl shadow p-[8em] px-[12em] ">
        <h1>Daftar Akun</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-12 col-form-label">{{ __('Nama') }}</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control border-black border-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-12 col-form-label">{{ __('Alamat Email') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control border-black border-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-12 col-form-label">{{ __('Password') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control border-black border-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-12 col-form-label">{{ __('Konfirmasi Password') }}</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control border-black border-2" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>



            <div class="flex justify-center mb-3">
                <p class="my-0">Sudah Punya Akun? <a class="ml-1" href="/login#bruh">Login Akun</a></p>
            </div>
            <div class="row mb-3">

            </div>

            <div class="flex justify-center mt-[2em]">
                <button type="submit" class="text-white font-bold text-[1.1rem] py-[0.8em] bg-sky-700 rounded w-[100%] mx-auto hover:bg-sky-600 active:bg-sky-800 transition duration-200">
                    {{ __('Daftar Akun') }}
                </button>

            </div>


    </div>
    </form>
</div>
</div>
{{-- <div class="container mb-[50em]">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
