const newsfeed = [
    {
        path:'/',
        component: ()=>import('@/layouts/MainLayout.vue'),

        children:[
            {
                path:'',
                name:'page.newsfeed',
                component: ()=> import('@/pages/newsfeed/NewsFeed.vue')
            }
        ]
    }
];
export default newsfeed;