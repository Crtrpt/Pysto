import Link from 'next/link'

export default function Footer({ children }) {
    return (
        <div className="mx-auto flex  border-b-2 border-black px-5">
            <div className="flex-grow py-2 flex">
                <div className=" font-bold">
                    <Link href="/" >Pysto</Link>
                </div>
                <div className="px-2">
                    <Link href="/device" >设备</Link>
                </div>
                <div className="px-2">
                    <Link href="/model" >型号</Link>
                </div>
                <div className="px-2">
                    <Link href="/product" >产品</Link>
                </div>
                <div className="px-2">
                    <Link href="/gateway" >网关</Link>
                </div>
                <div className="px-2">
                    <Link href="/scene" >场景</Link>
                </div>
            </div>
            <div className="py-2 flex  text-sm">
                <Link href="/doc" >帮助文档</Link>
            </div>
        </div>
    )
  }