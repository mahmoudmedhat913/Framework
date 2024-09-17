{extends file="{ROOT_PATH}\\themes\\template\\master.tpl"}
{block name=title}
    Alx Project
{/block}
{block name=appname}
    "Calculate" // Ignore that now i will tel you later
{/block}
{block name=pageName}
    cost type
{/block}
{block name=body}
    <div class="row placeholders">
        <div class="col-md-6 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Quick Pricing</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-md-6 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Pricing</h4>
            <span class="text-muted">Something else</span>
        </div>
    </div>

    <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>{literal}{{intTotal}}{/literal}</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            </tbody>
        </table>
    </div>
{/block}