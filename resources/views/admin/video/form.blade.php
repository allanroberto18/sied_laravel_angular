<div ng-class="column" ng-show="showForm">
    <form>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    @{{ title }}
                </h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" ng-click="close()">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <input type="hidden" name="_token" value="@{{ token }}"/>
                <div class="form-group" ng-class="{'has-error': errors.icone[0]}">
                    <label for="icone">
                        <i ng-class="{'fa fa-times-circle-o': errors.icone[0]}"></i>
                        Icone: <i class="fa" ng-class="entity.icone"></i>
                    </label>
                    <select name="icone" class="form-control" ng-model="entity.icone">
                        <option ng-repeat="(key, value) in icones" value="@{{key}}">@{{value}}</option>
                    </select>
                    <div class="help-block" ng-show="errors.icone[0]">
                        @{{ errors.icone[0] }}
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error': errors.titulo[0]}">
                    <label for="titulo">
                        <i ng-class="{'fa fa-times-circle-o': errors.titulo[0]}"></i>
                        Título:
                    </label>
                    <input type="text" name="titulo" class="form-control" ng-model="entity.titulo"/>
                    <div class="help-block" ng-show="errors.titulo[0]">
                        @{{ errors.titulo[0] }}
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error': errors.descricao[0]}">
                    <label for="descricao">
                        <i ng-class="{'fa fa-times-circle-o': errors.descricao[0]}"></i> Descrição:
                    </label>
                    <textarea name="descricao" class="form-control" maxlength="133" rows="3"
                              ng-model="entity.descricao"></textarea>
                    <div class="help-block" ng-show="errors.descricao[0]">
                        @{{ errors.descricao[0] }}
                    </div>
                </div>
            </div>
            <div class="overlay" ng-show="loadForm">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat" ng-click="save(entity)">
                    <i class="fa fa-check"></i>
                    Salvar Registro
                </button>
                <button class="btn btn-warning btn-flat" ng-click="cancel()">
                    <i class="fa fa-eraser"></i>
                    Limpar Formulário
                </button>
            </div>
        </div>
    </form>
</div>