import Head from 'next/head'
import Layout from '../components/innerLayout'
import DeviceListView  from './deviceListView'
import DeviceGridView  from './deviceGridView'
import { ViewListIcon,SearchIcon,CollectionIcon } from '@heroicons/react/solid'
export default function Device({
  displayMode,list
}) {
  console.log(displayMode);

  var view=displayMode==0?<DeviceGridView list={list} />:<DeviceListView  list={list}/>
  return (
    <div className="">
      <Head>
        <title>Pysto-设备</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <main className="flex flex-col">
          <div className="device_query py-1  border-b border-gray-300 px-1 flex">
            <div className="flex-grow flex items-center">
                <div>
                  <CollectionIcon className="h-4  text-gray-900 px-2"></CollectionIcon></div>
                <div>
                  <div className="border-2  hover:border-gray-700 rounded flex">
                    <input placeholder="搜索" className="p-1 text-sm outline-none"></input>
                    <SearchIcon className="w-4  text-gray-700 mr-2"></SearchIcon>
                  </div>
                </div>
            </div>
            <div className="flex items-center ">
              <ViewListIcon className="h-4  text-gray-900 px-2"></ViewListIcon>
              {/* <UserGroupIcon className="h-4  text-gray-900 px-2"></UserGroupIcon> */}
            </div>
          </div>
          {view}
      </main>

   
    </div>
  )
}

export async function getStaticProps(context) {
  return {
    props: {
      displayMode:1,
      list:[
        {name:"测试机器1",product_name:"CCSMOKE",model_name:"CCSMOKE01",id:1,last_event:"自检",last_time:"2021年11月11日16:34:42"},
        {name:"测试机器2",product_name:"CCSMOKE",model_name:"CCSMOKE02",id:2,last_event:"自检",last_time:"2021年11月11日16:34:42"},
        {name:"测试机器3",product_name:"CCSMOKE",model_name:"CCSMOKE02",id:3,last_event:"自检",last_time:"2021年11月11日16:34:42"},
        {name:"测试机器4",product_name:"CCSMOKE",model_name:"CCSMOKE02",id:4,last_event:"自检",last_time:"2021年11月11日16:34:42"},
        {name:"测试机器5",product_name:"CCSMOKE",model_name:"CCSMOKE02",id:5,last_event:"自检",last_time:"2021年11月11日16:34:42"},
      ]
    }, // will be passed to the page component as props
  }
}

Device.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

