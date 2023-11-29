const notification = [
    {
        path:'',
        name:'page.notification',
        meta:{
            title:'Notification'
        },
        component:()=>import('@/layouts/MainLayout.vue'),
        children:[
            {
                path:'/notifications',
                component:()=>import('@/pages/notification/Notification.vue')
            }
        ]
    }
];

export default notification;