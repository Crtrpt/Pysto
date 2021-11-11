import Head from 'next/head'

export default function Home() {
  return (
    <div className="flex flex-col items-center justify-center min-h-screen py-2">
      <Head>
        <title>Pysto</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="flex flex-row items-center justify-center w-full flex-1 px-20 text-center">
          <div className="form-item flex justify-center items-center">
            <div className="px-2">账户:</div>
            <div className=" border-2 border-gray-700 rounded ">
              <input className="p-1" />
            </div>
          </div>
          
          <div className="form-item flex justify-center items-center">
            <div className="px-2">密码:</div>
            <div className=" border-2 border-gray-700 rounded ">
              <input className="p-1" type="password"/>
            </div>
          </div>
          
          <div className="form-item flex justify-center items-center">
            <button className="px-5  py-1 border-2  mx-5  cursor-pointer hover:border-gray-600  rounded ">登录</button>
          </div>
      </main>

   
    </div>
  )
}
