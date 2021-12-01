import lombok.extern.slf4j.Slf4j;

@Slf4j
public class TestPlugin  implements  Plugin{

    public TestPlugin(){
        System.out.println("加载测试插件");
    }

    @Override
    public void install() {
        log.info("安装插件");
    }

    @Override
    public void uninstall() {
        log.info("卸载插件");
    }
}
