const notification = [
    {
        path:'',
        meta:{
            title:'Notification'
        },
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