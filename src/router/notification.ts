const notification = [
    {
        path:'',
        component:()=>import('@/layouts/MainLayout.vue'),

        children:[
            {
                path:'/notifications',
                name:'page.notification',
                component:()=>import('@/pages/notification/Notification.vue')
            }
        ]
    }
];

export default notification;