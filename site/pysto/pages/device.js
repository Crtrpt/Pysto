import Head from 'next/head'
import Layout from '../components/innerLayout'
import { ClockIcon } from '@heroicons/react/solid'
export default function Device() {
  return (
    <div className="">
      <Head>
        <title>Pysto-设备</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="flex flex-col">
          <div className="device_query py-2  border-b border-black px-5">
            设备筛选
          </div>
          <div className="flex">
            <div className="w-40 h-40 p-2 m-2 border rounded border-gray-700">
              一个设备
              <div>产品:CC0XCC</div>
              <div>型号:CC00111</div>
              <div className="text-sm"><ClockIcon className="w-4  text-red-900"></ClockIcon></div>
            </div>
            <div className="w-40 h-40 p-2 m-2 border-2 border-gray-700">
              一个设备
            </div>
          </div>
      </main>

   
    </div>
  )
}

Device.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

