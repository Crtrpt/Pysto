import Link from "next/link";
import {
  ViewGridIcon,
  ViewListIcon,
  ClockIcon,
  SearchIcon,
  ChevronDownIcon,
  SunIcon,
  ServerIcon,
  DeviceMobileIcon,
  CubeTransparentIcon,
  DocumentIcon,
  DocumentTextIcon,
  UserIcon,
} from "@heroicons/react/solid";
export default function Footer({ children }) {
  return (
    <div className="mx-auto flex  border-b-2 border-black hover:shadow px-2">
      <div className="flex-grow py-2 flex">
        <div className=" font-bold">
          <Link href="/">Pysto</Link>
        </div>
        <div className="px-1 pl-2">
          <Link href="/device">
            <div className="flex cursor-pointer">
              <CubeTransparentIcon className="w-4  text-gray-900 mr-1 " />
              <div>设备</div>
            </div>
          </Link>
        </div>
        <div className="px-1">
          <Link href="/model">
            <div className="flex cursor-pointer">
              <ViewGridIcon className="w-4  text-gray-900 mr-1 " />
              <div>型号</div>
            </div>
          </Link>
        </div>
        <div className="px-1">
          <Link href="/product">
            <div className="flex cursor-pointer">
              {" "}
              <DeviceMobileIcon className="w-4  text-gray-900 mr-1 " />
              <div>产品</div>
            </div>
          </Link>
        </div>
        <div className="px-1">
          <Link href="/gateway">
            <div className="flex cursor-pointer">
              {" "}
              <ServerIcon className="w-4  text-gray-900 mr-1 " />
              <div>网关</div>
            </div>
          </Link>
        </div>
        <div className="px-1">
          <Link href="/scene">
            <div className="flex cursor-pointer">
              <SunIcon className="w-4  text-gray-900 mr-1 " />
              <div>场景</div>
            </div>
          </Link>
        </div>
      </div>
      <div className="py-2 flex  text-sm">
        <Link href="/doc">
          <div className="flex items-center mr-2"> <UserIcon className="w-4  text-gray-900 mr-1 cursor-pointer" />
              Guess</div>
        </Link>
        <Link href="/doc">
            <div className="flex items-center"> <DocumentTextIcon className="w-4  text-gray-900 mr-1 cursor-pointer" />
            帮助文档</div>
        </Link>
      </div>
    </div>
  );
}
